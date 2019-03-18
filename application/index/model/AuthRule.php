<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-5
 * Time: 17:21
 */

namespace app\index\model;


use think\Model;

class AuthRule extends Model
{
    public function getChiledRen()
    {
        $data = $this->where(['pid' => 0])->select()->toArray();
        foreach ($data as $k => $v) {
            $data[$k]['children'] = db('authRule')->where(['pid' => $v['id']])->select();
            foreach ($data[$k]['children'] as $k1 => $v1) {
                $data[$k]['children'][$k1]['children'] = $this->where(['pid' => $v1['id']])->select();
            }
        }
        return $data;
    }



}