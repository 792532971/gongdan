<?php
/**
 * Created by PyCharm.
 * User: LT
 * Date: 2019/03/07
 * Time: 15:25
 *
 *    .--,       .--,
 *   ( (  \.---./  ) )
 *    '.__/o   o\__.'
 *       {=  ^  =}
 *        >  -  <
 *       /       \
 *      //       \\
 *     //|   .   |\\
 *     "'\       /'"_.-~^`'-.
 *        \  _  /--'         `
 *      ___)( )(___
 *     (((__) (__)))    高山仰止,景行行止.虽不能至,心向往之.
 *____________________________BUG都是浮云_____________.
 */

namespace app\index\controller;


use think\Db;
use think\facade\Request;

class Admin extends Base
{
    /**
     * 主页渲染
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isAjax()){
            $data = Request::post();
            $validate = validate('Admin');
            if (!$validate->check($data)) {
                return ['code' => 0, 'msg' => $validate->getError()];
            }
            $data['password'] = my_encrypt($data['password']);
            $data['workdate'] = dateUnix($data['workdate']);
            $addId = Db::table('txzh_admin')->insertGetId($data);
            $_data['uid'] = $addId;
            $_data['group_id'] = $data['groupid'];
            $result = db('auth_group_access')->insert($_data);
            if($result && $addId){
                return json(['code'=>1,'msg'=>'添加成功']);
            }
            return json(['code'=>0,'msg'=>'添加失败']);

        }
        $resu = \app\index\model\AuthGroup::all();
        $this->assign('group',$resu);
        return $this->fetch();
    }

    /**
     * 员工页面数据渲染
     * @param string $start_time
     * @param string $end_time
     * @param string $username
     * @param int $search
     * @return \think\response\Json
     * @throws \think\exception\DbException
     */
    public function adminData($start_time = '', $end_time = '', $username = '', $search = 0)
    {
        $Admin = new \app\index\model\Admin();
        if ($search == 1) {
            $where = [];
            if ($username != '') {
                $where[] = ['username', '=', trim($username)];
            }
            if ($start_time != '' && $end_time == '') {
                $where[] = ['workdate', '>=', strtotime(trim($start_time))];
            }
            if ($end_time != '' && $start_time == '') {
                $where[] = ['workdate', '<=', strtotime(trim($end_time))];
            }
            if ($end_time != '' && $start_time != '') {
                $Admin->whereBetweenTime('workdate', $start_time, $end_time);
                $where[] = ['workdate', 'between time', [$start_time, $end_time]];
            }
            $data = $Admin->where($where)->where('status', 0)->paginate(config('page_num'), false, ['query' => $_GET])->each(function ($item, $key) {
                $item->workdate = dateFormat($item->workdate);
                $item->quitdate = dateFormat($item->quitdate);
                $item->groupid = \app\index\model\AuthGroup::getGroupIdTitle($item->groupid);
            });
//            $data = $Admin->where($where)->select(false);
            $page = $data->render();
            return json([
                'data' => $data,
                'page' => $page
            ]);
        }
        $data = $Admin->where('status', 0)->paginate(config('page_num'), false, ['query' => $_GET])->each(function ($item, $key) {
            $item->workdate = dateFormat($item->workdate);
            $item->quitdate = dateFormat($item->quitdate);
            $item->groupid = \app\index\model\AuthGroup::getGroupIdTitle($item->groupid);
        });
        $page = $data->render();
        return json([
            'data' => $data,
            'page' => $page
        ]);
    }

    /**
     * 渲染编辑页面
     * @param int $id
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function edit(int $id = 0)
    {
        $data = $this->getAdminData($id);
        $bumen = db('auth_group')->select();
        $this->assign('bumen', $bumen);
        $this->assign('data', $data);
        return $this->fetch();
    }

    /**
     * 编辑数据
     * @param int $id
     * @return \think\response\Json
     */
    public function getAdminData(int $id = 0)
    {
        $Admin = new \app\index\model\Admin();
        if (!$data = $Admin->find(['id' => $id])) {
            return json(['code' => '0', 'msg' => '数据不存在']);
        }
        $result = $Admin::adminFormatData($data);

        return $result;
    }

    /**
     * 获取分组信息
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function groupData()
    {
        $data = db('auth_group')->field('id,title')->select();
        return json($data);
    }

    /**
     * 数据编辑保存
     * @return \think\response\Json
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function editSave()
    {
        $data = request()->post();
        $validate = new \app\index\validate\Admin();
        if (!$validate->sceneEditSave()->check($data)) {
            return json(['code' => 0, 'msg' => $validate->getError()]);
        }

        $Admin = new \app\index\model\Admin();
        $data['workdate'] = dateUnix($data['workdate']);
        $data['quitdate'] = dateUnix($data['quitdate']);
        if ($Admin->where('id', $data['id'])->update($data)) {
            return json(['code' => 1, 'msg' => '编辑成功']);
        }
        return json(['code' => 0, 'msg' => '编辑失败']);


    }

    /**
     * 员工软删除
     * @param int $id
     * @return \think\response\Json
     */
    public function adminDelete(int $id = 0)
    {
        if (!$data = \app\index\model\Admin::get($id)) {
            return json(['code' => 0, 'msg' => '数据不存在请检查']);
        }
        $data['status'] = 1;
        $result = $data->save();
        if ($result) {
            return json(['code' => 1, 'msg' => '删除成功']);
        } else {
            return json(['code' => 0, 'msg' => '删除失败']);
        }


    }
}