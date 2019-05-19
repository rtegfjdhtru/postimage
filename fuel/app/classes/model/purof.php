<?php

namespace Model;

use Oil\Exception;

class Purof extends \Model
{

    //プロフィールデータのやりとり
    public static function purof_results($name,$message,$img,$id)
    {
        try{


      //   本来はデータベースにアクセスし、取得したデータを返す。
        $query = \DB::update('users');
        // カラム名と値をセット
        $query->set(array(
            'nickname' => $name,
            'message' => $message,
            'img' => $img
        ));
        $query->where('id',$id);
        $result = $query->execute();
        return $result;
        }catch (Exception $e){
            Log::debug('エラー発生:'.$e->getMessage());
            throw $e;
        }
    }





}


