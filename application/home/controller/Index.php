<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-12
 * Time: 10:16
 */

namespace app\home\controller;


use think\facade\Request;
use think\helper\Time;

class Index extends Base
{
    public function index()
    {
        $where = [];
        $status = [];
        $key = Request::get('keywords');
        $v = Request::get('v');
        if ($key) {
            list($today_start, $today_end) = Time::today();
            list($yester_start, $yester_end) = Time::yesterday();
            list($week_start, $week_end) = Time::week();
            if ($key == 1) {
                $where[] = ['submit_time', 'between', [$today_start, $today_end]];
                if ($v && $v == -1) {
                    $status[] = ['status', '=', 0];
                }
                if ($v && $v == 2) {
                    $status[] = ['status', '=', 2];
                }
            }
            if ($key == -1) {
                $where[] = ['submit_time', 'between', [$yester_start, $yester_end]];
                if ($v && $v == -1) {
                    $status[] = ['status', '=', 0];
                }
                if ($v && $v == 2) {
                    $status[] = ['status', '=', 2];
                }
            }
            if ($key == 7) {
                $where[] = ['submit_time', 'between', [$week_start, $week_end]];
                if ($v && $key && $v == -1) {
                    $status[] = ['status', '=', 0];
                }
                if ($v && $key && $v == 2) {
                    $status[] = ['status', '=', 2];
                }
            }
        }
        $member_id = session('member_id');
        $Ticket = new \app\home\model\Ticket();
        $data = $Ticket->where('member_id', $member_id)->where($where)
            ->where($status)
            ->paginate(config('page_num'), false, ['query' => $_GET]);
        $num = 0;

        $huifuNum = 0;
        foreach ($data as $v) {
            if ($v['status'] == 0) {
                $num += 1;
            } elseif ($v['status'] == 2) {
                $huifuNum += 1;
            }
        }
        $page = $data->render();
        $total = $data->total();
        $this->assign([
            'data' => $data,
            'page' => $page,
            'num' => $num,
            'huifuNum' => $huifuNum,
            'total' => $total
        ]);
        return $this->fetch();
    }

    public function getDataT()
    {
        $id = input('id');
        if ($id == 0) {
            $res['data'] = db('ticket')->where('member_id', session('user_id'))->whereTime('submit_time', 'today')->select();  //全部
        } elseif ($id == 1) {
            $res['data'] = db('ticket')->where('member_id', session('user_id'))->whereTime('submit_time', 'yesterday')->select(); //昨天
        } elseif ($id == 2) {
            $res['data'] = db('ticket')->where('member_id', session('user_id'))->whereTime('submit_time', 'd')->select(); //今天
        } elseif ($id == 7) {
            $res['data'] = db('ticket')->where('member_id', session('user_id'))->whereTime('submit_time', 'w')->select(); //本周
        }
        if (count($res['data']) > 0) {
            foreach ($res['data'] as &$v) {
                if ($v['status'] == 2) {
                    $v['status'] = '待回复';
                } else {
                    $v['status'] = '已回复';
                }
                $v['model_id'] = $this->getModelName($v['model_id']);
                $v['submit_time'] = date('Y-m-d H:i:s', $v['submit_time']);
            }
        }
        return json($res['data']);
    }

    private function getModelName($id)
    {
        $result = db('ticket_model')->where('model_id', $id)->value('model_name');
        return $result;

    }


}