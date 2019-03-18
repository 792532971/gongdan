<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-6
 * Time: 10:28
 */

namespace app\index\model;


use think\Model;

class Dep extends Model
{
    protected $pk = 'dep_id';

    //规则无限极树
    public function ruleTree($ruleRes)
    {
        return $this->sort($ruleRes);
    }

    // 进行排序
    public function sort($ruleRes, $dep_pid = 0, $level = 0)
    {

        static $arr = [];
        foreach ($ruleRes as $k => $v) {
            if ($v['dep_pid'] == $dep_pid) {
                $v['level'] = $level;
                $arr[] = $v;
                $this->sort($ruleRes, $v['dep_id'], $level + 1);
            }
        }

        return $arr;
    }




}