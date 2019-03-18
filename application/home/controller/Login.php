<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-12
 * Time: 10:57
 */

namespace app\home\controller;


use think\Controller;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function register()
    {
        return $this->fetch();
    }

    public function registerSave()
    {
        $data = request()->post();
        $validate = validate('Login');
        if(!$validate->check($data)){
            return json(['code'=>0,'msg'=>$validate->getError()]);
        }
        $data['create_time'] = time();
        $data['password'] = md5($data['password']);
        $result = db('user')->strict(false)->insert($data);
        if($result){
            return json(['code'=>1,'msg'=>'添加成功']);
        }else{
            return json(['code'=>0,'msg'=>'添加失败']);
        }

    }

    public function checkLogin()
    {
        $data = request()->post();
        $validate = new \app\home\validate\Login();
        if(!$validate->sceneCheckLogin()->check($data)){
            return json(['code'=>0,'msg'=>$validate->getError()]);
        }
        $res = db('user')->where('username',$data['username'])->find();
        if($res){
            if(md5($data['password']) == $res['password']){
                session('member_id',$res['id']);
                session('member_name',$res['username']);
                return json(['code'=>1,'msg'=>'登录成功']);
            }else{
                return json(['code'=>0,'msg'=>'密码错误']);
            }
        }else{
            return json(['code'=>0,'msg'=>'用户不存在']);
        }

    }

    public function logout()
    {
        session(null);
        $this->redirect('login/index');
    }

    public function test()
    {
        dump(session('member_id'));
    }
}