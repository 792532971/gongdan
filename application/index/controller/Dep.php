<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-6
 * Time: 10:25
 */

namespace app\index\controller;

use app\index\model\Dep as DepM;
use think\facade\Request;

class Dep extends Base
{
    /**
     * 部门首页渲染
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 获取部门数据
     * @return array
     */
    public function depData()
    {
        $ruleRes = DepM::select();

        $DepM = new DepM();
        $DepTree = $DepM->ruletree($ruleRes);
        foreach ($DepTree as &$rule) {
            $rule['dep_pidname'] = db('dep')->where('dep_id', $rule['dep_pid'])->value('dep_name');
            if ($rule['status'] == 0) {
                $rule['status'] = '<span style="color: #008000">开启</span>';
            } else {
                $rule['status'] = '<span style="color: #FF0000">关闭</span>';
            }
        }
        return ['code' => 0, 'msg' => 'ok', 'data' => $DepTree];
    }

    /**
     * 部门添加页面渲染
     * @return mixed
     */
    public function depAdd()
    {

        $DepM = new DepM();
        $data = $DepM->select();
        $res = $DepM->sort($data);
        $this->assign('data', $res);
        return $this->fetch('add');
    }

    /**
     * 部门添加保存
     * @return \think\response\Json
     */
    public function depSave()
    {
        if (Request::isPost()) {
            $data = Request::post();
            if ($data) {
                $validate = new \app\index\validate\Dep;
                if (!$validate->check($data)) {
                    return json(['code' => 0, 'msg' => $validate->getError()]);
                }
                $DepM = new DepM();
                if (!$result = $DepM->save($data)) {
                    return json(['code' => 0, 'msg' => '部门添加失败']);
                }
                return json(['code' => 1, 'msg' => '部门添加成功']);

            }
        }
    }

    /**
     *
     * @param int $id
     * @return \think\response\Json
     */
    public function findChild($id = 0)
    {
        $ruleRes = DepM::select();

        $DepM = new DepM();
        $DepTree = $DepM->sort($ruleRes, $id);
        $arr = [];
        foreach ($DepTree as $k => $v) {
            $arr[] = $v['dep_id'];
        }

        $childNum = count($DepTree);
        if ($childNum >= 1) {
            return json(['code' => 1, 'msg' => '将删除所有下级部门确定删除吗?', 'data' => $arr]);
        } elseif ($childNum <= 0) {
            return json(['code' => 0, 'msg' => '不存在下级']);
        }


    }


    /**
     * 部门删除
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function depDel()
    {
        $DepM = new DepM();
        $id = Request::get('id');
        if (!$id) {
            return json(['code' => 0, 'msg' => '数据有误,请检查']);
        }
        $data = $DepM->where('dep_id', $id)->find();
        if ($data) {
            if ($data->delete()) {
                return json(['code' => 1, 'msg' => '部门' . $data['dep_name'] . '删除成功']);
            } else {
                return json(['code' => 0, 'msg' => '部门' . $data['dep_name'] . '删除失败']);
            }
        }

    }

    /**
     * 下级部门删除
     * @return \think\response\Json
     */
    public function allDelete()
    {
        $DepM = new DepM();
        $data = Request::post();
        $result = $DepM->destroy($data['data']);
        if ($result) {
            return json(['code' => 1, 'msg' => '删除成功111']);
        } else {
            return json(['code' => 0, 'msg' => '删除失败222']);
        }
    }

    /**
     * 渲染部门编辑页面
     * @param int $id
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function depEdit(int $id = 0)
    {
        $DepM = new DepM();
        $pidInfo = $DepM->field('dep_id,dep_pid,dep_name')->select();
        $res = $DepM->sort($pidInfo);
        $data = $DepM->find($id);
        $this->assign('data', $data);
        $this->assign('pidinfo', $res);
        return $this->fetch('edit');
    }

    /**
     * 部门编辑保存
     * @param int $id
     * @param int $dep_pid
     * @param string $dep_name
     * @param string $dep_pinyin
     * @return \think\response\Json
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function depEditSave(int $id = 0, int $dep_pid = 0, string $dep_name = '', string $dep_pinyin = '')
    {
        $data = ['dep_pid' => $dep_pid, 'dep_name' => $dep_name, 'dep_pinyin' => $dep_pinyin];

        $validate = new \app\index\validate\Dep;
        if (!$validate->sceneDepEditSave()->check($data)) {
            return json(['code' => 0, 'msg' => $validate->getError()]);
        }
        $DepM = new DepM();
        $result = $DepM->where('dep_id', $id)->update($data);
        if ($result) {
            return json(['code' => 1, 'msg' => '编辑成功']);
        } else {
            return json(['code' => 0, 'msg' => '编辑失败']);
        }
    }


}