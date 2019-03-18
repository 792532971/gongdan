<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-11
 * Time: 18:11
 */

namespace app\index\controller;


class Ticket extends Base
{
    public function index()
    {
        $Ticket = new \app\index\model\Ticket();
        $data = $Ticket->paginate(config('page_num'),false,['query'=>$_GET])->each(function ($item,$key){
            $item->submit_time = date('Y-m-d H:i:s',$item->submit_time);
            $item->run_time = date('Y-m-d H:i:s',$item->run_time);
        });
        $page = $data->render();
        $this->assign([
            'data' => $data,
            'page' => $page
        ]);

        return $this->fetch();
    }
}