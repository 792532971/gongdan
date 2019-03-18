<?php

namespace app\index\validate;

use think\Validate;

class Dep extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    'dep_name' => 'require|unique:dep'
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'dep_name.require' => '部门名称不能是空的'
    ];

    // edit 验证场景定义
    public function sceneDepEditSave()
    {
        return $this->only(['dep_name'])
            ->remove('dep_name', 'unique');
    }


}
