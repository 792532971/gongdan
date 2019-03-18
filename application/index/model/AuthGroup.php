<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-8
 * Time: 17:48
 */

namespace app\index\model;


use think\Model;

class AuthGroup extends Model
{
    public static function getGroupIdTitle($value)
    {
       return self::where('id',$value)->value('title');
    }
}