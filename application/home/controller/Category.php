<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-13
 * Time: 10:19
 */

namespace app\home\controller;


use app\home\model\ChatImg;
use app\home\model\TicketChat;
use app\home\model\TicketContent;
use think\Db;
use think\facade\App;

class Category extends Base
{
    public function index()
    {
        $datas = db('ticket_model')->select();
        $this->assign('data', $datas);
        return $this->fetch();
    }

    public function ticket($id = '')
    {
        if (!$data = db("ticket_model")->field('model_id,model_number,model_name,model_des,model_number')->where('model_id', $id)->find()) {
            return json(['code' => 0, 'msg' => '工单模型数据有误']);
        }
        $this->assign('data', $data);
        $this->assign('model_id', $data['model_id']);
        return $this->fetch();
    }

    /**
     * 工单提交
     * @return \think\response\Json
     */
    public function gongdanTijiao()
    {
        if ($datas = request()->post()) {
            $data = $this->check($datas);
            $files = request()->file('file1');
            foreach ($files as $file) {
                $info = $file->move(App::getRootPath() . 'public' . '/' . 'uploads');
                if ($info) {
                    //文件的保存路径
                    $filePath = request()->domain() . '/' . 'uploads/' . $info->getSaveName();
                    $fileP = $filePath;
                    $filePa[] = str_replace('\\', "/", $fileP);
                }
            }

        }
        //生成唯一的id
        $data['number'] = \app\home\model\Ticket::getOnlyNumber();
        $data['member_id'] = session('member_id');
        $data['submit_time'] = time();


        $Ticket = new \app\home\model\Ticket();
        // 启动事务
        Db::startTrans();
        try {
            $Ticket->allowField(true)->save($data);
            $TicketChat = new TicketChat();
            $TicketChat->save([
                'ticket_id' => $Ticket->id,
                'user_id' => session('member_id'),
                'user_name' => session('member_name'),
                'ticket_chat_content' => $data['ticket_form_content'],
                'ticket_chat_time' => time(),
                'type' => 2
            ]);
            $ChatImg = new ChatImg();
            for ($i = 0; $i < count($filePa); $i++) {
                $ChatImg->insert([
                    'chat_id' => $TicketChat->id,
                    'img_url' => $filePa[$i],
                    'create_time' => time(),
                    'img_type' => 2
                ]);
            }
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            return json(['code' => 0, 'msg' => '提交失败']);
        }
        //todo:可以添加邮件发送给 工单发起者
        return json(['code' => 1, 'msg' => '提交成功', 'data' => $data['number']]);


    }

    /**
     * 验证联系方式
     * @param $data
     * @return \think\response\Json
     */
    public function check($data)
    {
        if ($data['contact'] == 1) {
            if ($data['contact_account'] == '') {
                return json(['code' => 0, 'msg' => '邮箱数据有误,请重新输入']);
            } elseif (self::regular($data['contact_account']) == false) {
                return json(['code' => 0, 'msg' => '邮箱格式不正确']);
            }
        } elseif ($data['contact'] == 3) {
            if ($data['contact_account'] == '') {
                return json(['code' => 0, 'msg' => '手机号数据有误,请重新输入']);
            } elseif (self::checkPhone($data['contact_account']) == false) {
                return json(['code' => 0, 'msg' => '手机格式不正确,请重新输入']);
            }
        }
        return $data;
    }


    /**
     *邮箱验证
     * @param $val
     * @return bool
     */
    public static function regular($val)
    {
        $rules = '/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/';

        if (preg_match($rules, $val)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 手机号验证
     * @param $val
     * @return bool
     */
    public static function checkPhone($val)
    {
        if (preg_match("/^1[345678]{1}\d{9}$/", $val)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 提交工单获取联系方式
     * @return array
     */
    public function radioValue()
    {
        $v = request()->get('v');
        $member_id = session('member_id');
        $data = [];
        if ($v == 1) {
            $data['value'] = db('user')->where('id', $member_id)->value('email');
        }
        if ($v == 3) {
            $data['value'] = db('user')->where('id', $member_id)->value('mobile_tel');
        }

        return $data;

    }


}