<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-3-12
 * Time: 17:41
 */

namespace app\home\model;


use think\Model;

class Ticket extends Model
{

    /*
     * 跟新活跃时间
     */
    public static function updateReferTime($value)
    {
        self::where('number', $value)->update(['refer_time' => time()]);
    }

    public static function inTicketIdWithUpdate($value)
    {
        self::where('id', $value)->update(['read' => 0]);
    }

    /**
     * 回复工单
     * @param $id
     * @param $content
     * @param string $custom
     * @param array $filePa
     * @return int|string
     */
    public static function addReply($id, $content, array $filePa = [])
    {

        $param = [
            'ticket_id'             =>  $id,
            'ticket_chat_content'   =>  $content,
            'ticket_chat_time'      =>  time(),
            'user_id'               =>  session('member_id'),
            'user_name'             =>  session('member_name'),
            'type'                  =>  2
        ];


        $ticket_id = db('ticket_chat')->insertGetId($param);
        $ChatImg = new ChatImg();
        if (count($filePa) != 0) {
            for ($i = 0; $i < count($filePa); $i++) {
                $ChatImg->insert([
                    'chat_id' => $ticket_id,
                    'img_url' => $filePa[$i],
                    'create_time' => time(),
                    'img_type' => 2
                ]);
            }
        }

        return 1;
    }

    public static function findContent($table, $value, $field, $showField = '*')
    {
        return db($table)->field($showField)->where("{$field} = :$field")->find(array($field => $value));
    }

    /**
     * 生成唯一的ID
     */
    public static function getOnlyNumber()
    {
        $randStr = range('A', 'Z');
        shuffle($randStr);
        $microtime = explode(" ", microtime());
        $number = round($microtime['0'] * $microtime['1'] * rand(1, 100));

        $No = "";
        for ($i = 0; $i < rand(1, 10); $i++) {
            $No .= $randStr[$i];
        }
        return $No . $number;
    }

    public function getModelNameAttr($val, $v)
    {
        $name = db('ticket_model')->where('model_id', $v['model_id'])->value('model_name');
        return $name;
    }

    public function getSubmitTimeAttr($k, $v)
    {
        return date('Y-m-d H:i:s', $v['submit_time']);
    }

    public function getStatusAAttr($k, $v)
    {
        switch ($v['status']) {
            case 0:
                echo '<span style="color: #0b6fa2">待解决</span>';
                break;
            case 1:
                echo '<span style="color: #0044cc">受理</span>';
                break;
            case 2:
                echo '<span style="color: #c12e2a">待回复</span>';
                break;
            case 3:
                echo '<span style="color: #008800">已完成</span>';
                break;
        }
    }
}