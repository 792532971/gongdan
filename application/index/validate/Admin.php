<?php

namespace app\index\validate;

use think\Validate;

class Admin extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'    =>    ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'nickname'      =>       'require',
        'mobile_tel'    =>       'mobile',
        'email'         =>       'email',
        'workdate'      =>       'require|dateFormat:Y-m-d',
        'quitdate'      =>       'dateFormat:Y-m-d',
        'id_card'       =>       'idCard',
        'banknum'       =>       'number|min:11|max:19'
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'    =>    '错误信息'
     *
     * @var array
     */
    protected $message = [
        'nickname.require'      =>  '昵称不能为空',
        'mobile_tel.mobile'     =>  '手机号码不正确',
        'email.require'         =>  '邮箱不能为空',
        'email.email'           =>  '邮箱格式不正确',
        'workdate.require'      =>  '参加工作时间不能是空',
        'workdate.dateFormat'   =>  '时间格式不正确',
        'id_card.idCard'        =>  '身份证格式不正确',
        'banknum.number'        =>  '请输入正确银行卡号',
        'banknum.min'           =>  '请输入正确银行卡号',
        'banknum.max'           =>  '请输入正确银行卡号',

    ];

    // edit 验证场景定义
    public function sceneEditSave()
    {
        return $this->only(['nickname','mobile_tel','email','workdate','quitdate','id_card','banknum']);
    }

    // add 验证场景定义
    public function sceneAdd()
    {
        return $this->only(['username','nickname','mobile_tel','email','workdate'])->append('username','unique:admin');
    }
}
