<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-12
 * Time: 11:25
 */

namespace app\home\validate;


use think\Validate;

class Login extends Validate
{
    protected $rule = [
        'username' => 'require|unique:user',
        'email' => 'require|email',
        'mobile_tel' => 'require',
        'password' => 'require',
        'repassword' => 'require|confirm:password',
    ];

    protected $message = [
        'username.require' => '账户不能是空',
        'email.require' => '邮箱必填',
        'email.email' => '邮箱格式错误',
        'password.require' => '密码不能是空',
        'repassword.require' => '确认密码不能是空',
        'repassword.confirm' => '两次密码不一致',
    ];

    // edit 验证场景定义
    public function sceneCheckLogin()
    {
        return $this->only(['username','password'])
            ->remove('username','unique');
    }


}