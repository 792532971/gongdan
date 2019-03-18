<?php
namespace app\index\controller;



class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function welcome()
    {
        return $this->fetch();
    }

    public function meme()
    {
        return $this->fetch('list');
    }


    public function test($page){
        $result = db('auth_rule')->page($page, 1)->select();
        return $result;
    }

}
