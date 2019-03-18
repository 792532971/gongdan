<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-5
 * Time: 11:17
 */

namespace app\index\controller;


use think\App;
use think\Controller;
use think\facade\Request;

class Login extends Controller
{
    public function __construct(App $app = null)
    {
        parent::__construct($app);
        $this->Admin = db('admin');
    }

    public function index()
    {
        return $this->fetch();
    }

    public function checkLogin(Request $request)
    {
        if($request::isAjax()){
            $data = $request::param();

            $result = $this->Admin->where('username',$data['username'])->find();
            if($result){
                if(my_decrypt($result['password']) == $data['password']){
                    $ip = abs(ip2long($request::ip()));
                    $login_log = [
                        'username'   => $data['username'],
                        'login_time' => time(),
                        'login_ip'   => $ip,
                    ];
                    db('admin')->where('id',$result['id'])->setInc('login_count',1);

                    db('admin_login_log')->insert($login_log);
                    session('admin_id',$result['id']);
                    session('user_name',$result['username']);
                    return json(['code'=>1,'msg'=>'登陆成功']);
                }else{
                    return json(['code'=>0,'msg'=>'密码输入错误,请重新输入']);
                }
            }else{
                return json(['code'=>0,'msg'=>'账号不存在']);
            }

        }
    }

    public function logout(Request $request)
    {

        $login_log = [
            'username'   => session('user_name'),
            'login_ip'   => abs(ip2long($request::ip())),
            'logout_time' => time(),
            'status'   => 1,
        ];
        db('admin_login_log')->insert($login_log);
        session(null);

        return redirect('index');
    }

    public function test()
    {
       $auth = new Auth();
       halt($auth);
    }


}