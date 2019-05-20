<?php

namespace Model;



class Purof extends \Model
{

    //プロフィールデータのやりとり
    public static function purof_results($name,$message,$img,$id)
    {


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


}

}


