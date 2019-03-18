<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-11
 * Time: 19:06
 */

namespace app\index\model;


use think\Model;

class Ticket extends Model
{
    public function getAdminNameAttr($k,$v)
    {
        $name = db('admin')->where('id',$v['id'])->value('nickname');
        return $name;
    }

    public function getModelNameAttr($k,$v)
    {
        $model_name = db('ticket_model')->where('model_id',$v['model_id'])->value('model_name');
        return $model_name;
    }

}