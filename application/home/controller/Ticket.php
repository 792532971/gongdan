<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-12
 * Time: 15:47
 */

namespace app\home\controller;


use app\home\model\ChatImg;
use app\home\model\TicketChat;
use think\facade\App;

class Ticket extends Base
{
    public function index($id = '')
    {

        $res = db('ticket')->where('number', $id)->find();
        $res['submit_time'] = date('Y-m-d H:i:s', $res['submit_time']);
        $res['refer_time'] = date('Y-m-d H:i:s', $res['refer_time']);

        $model_name = db('ticket_model')->where('model_id', $res['model_id'])->find();
        $list = TicketChat::where('ticket_id', $res['id'])->
//        paginate(3, false, ['query' => $_GET]);
        select();
//        $page = $list->render();
        foreach ($list as $k => $lis) {
            $img = ChatImg::where('chat_id', $lis['ticket_chat_id'])->select()->toArray();
            if (count($img) != 0) {
                $list[$k]['img'] = $img;
            }
        }

        $count = db('ticket_chat')->where('type', 1)->where('ticket_id', $res['id'])->count();
        $this->assign([
            'list' => $list,
            'data' => $res,
            'sta' => self::returnStatus($res['status']),
            'model_name' => $model_name,
            'total' => $count,
            'id' => $res['id'],
//            'page' => $page
        ]);
        return $this->fetch();
    }

    /**
     * 实时获取数量
     * @return float|string
     */
    public function realTime()
    {
        $data = request()->get();

        $count = db('ticket_chat')->where('type', 1)->where('ticket_id', $data['id'])->count();
        return $count;

    }


    /**
     *  回复消息
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function replay()
    {
        $filePa = [];
        if ($datas = request()->post()) {

            if ($files = request()->file('file1')) {
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
        }
        if ($datas['content'] == '') {
            return json(['code' => 0, 'msg' => '内容不能是空']);
        }
        $data = db('ticket')->where('number', $datas['number'])->find();
        if (empty($data)) {
            return json(['code' => 0, 'msg' => '该工单不存在或已关闭']);
        }
        \app\home\model\Ticket::updateReferTime($data['number']);
        \app\home\model\Ticket::inTicketIdWithUpdate($data['id']);
        $result = \app\home\model\Ticket::addReply($data['id'], $datas['content'], $filePa);
        if ($result > 0) {
            return json(['code' => 1, 'msg' => '回复工单成功', 'data' => $data['number']]);
        }

    }

    /**
     * 状态返回
     * @param $value
     * @return string
     */
    private function returnStatus($value)
    {
        switch ($value) {
            case 0:
                $res['status'] = '待解决';
                break;
            case 1:
                $res['status'] = '受理';
                break;
            case 2:
                $res['status'] = '待回复';
                break;
            case 3:
                $res['status'] = '已完成';
        }

        return $res['status'];
    }


}