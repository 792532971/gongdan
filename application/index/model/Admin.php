<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-7
 * Time: 13:22
 */

namespace app\index\model;


use think\Model;

class Admin extends Model
{
    public static function adminFormatData($data)
    {
        if($data['workdate']){
            $data['workdate'] = dateFormat($data['workdate']);
        }
        if($data['quitdate']){
            $data['quitdate'] = dateFormat($data['quitdate']);
        }

        return $data;
    }

    protected static function getGroupName($v)
    {
        return db('auth_group')->where('id',$v)->value('title');
    }



}