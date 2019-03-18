<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-5
 * Time: 15:39
 */

namespace app\index\controller;


use app\index\model\AuthRule;
use think\facade\Request;

class AuthGroup extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 获取角色信息
     * @return \think\response\Json
     */
    public function group_data()
    {
        $AuthGroup = new \app\index\model\AuthGroup();
        $data = $AuthGroup->select();
        return json($data);

    }

    /**
     * 修改角色权限
     * @param Request $request
     * @return array|mixed
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function power(Request $request)
    {
        if ($request::isAjax()) {
            $data = $request::param();
            $rules = implode(',', $data['rules']);
            $save = db('auth_group')->where(['id' => $data['id']])->update(['rules' => $rules]);
            if ($save !== false) {
                return ['code' => 1, 'msg' => '分配权限成功'];
            } else {
                return ['code' => 0, 'msg' => '分配权限失败,请检查数据'];
            }
        }
        $AuthRule = new AuthRule();
        $data = $AuthRule->getChiledRen();
        $id = input('id');
        $authGroups = db('auth_group')->find($id);
        $rules = explode(',', $authGroups['rules']);
        $this->assign([
            'authGroups' => $authGroups,
            'data' => $data,
            'rules' => $rules,
        ]);
        return $this->fetch();
    }

    /**
     * 添加页面渲染
     * @return mixed
     */
    public function roleAdd()
    {
        return $this->fetch('add');
    }

    /**
     * 添加角色信息
     * @param string $title
     * @param int $status
     * @return \think\response\Json
     */
    public function addSave($title = '', $status = 0)
    {

        $result = $this->validate(
            [
                'title' => $title,
            ],
            'app\index\validate\AuthGroup');

        if (true !== $result) {
            return json(['code' => 0, 'msg' => $result]);
        }
        $AuthGroup = new \app\index\model\AuthGroup();
        $data = ['title' => $title, 'status' => $status];
        $result = $AuthGroup->insert($data);
        if ($result) {
            return json(['code' => 1, 'msg' => '添加成功']);
        } else {
            return json(['code' => 0, 'msg' => '添加失败']);
        }

    }

    /**
     * 删除角色
     * @param int $id
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function groupDelete(int $id = 0)
    {
        $AuthGroup = new \app\index\model\AuthGroup();
        if (!$row = $AuthGroup->field('id')->where('id', $id)->find()) {
            return json(['code' => 0, 'msg' => '数据有误请检查']);
        }
        if (!$result = $row->delete()) {
            return json(['code' => 0, 'msg' => '删除失败']);
        }
        return json(['code' => 1, 'msg' => '删除成功']);

    }






}