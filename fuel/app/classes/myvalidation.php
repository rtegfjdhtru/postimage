<?php

/**
 * Created by PhpStorm.
 * User: kunotota
 * Date: 2019-05-04
 * Time: 01:58
 */
class MyValidation
{

//メール重複確認
    public static function _validation_unique_email($email)
    {  //Validationクラスを呼び出し、set_massageメソッドでメッセージを設定する
        $result = DB::select('email')
            ->where('email', '=', strtolower($email))//emailを条件にDB検索
            ->from('users')->execute(); //usersテーブル内を検索
        return !($result->count() > 0); //取得件数が0より多ければfalseを返す
    }

     //メールとパスワード称号
    public static function _validation_unique_loginCheck($email,$password){
       $result = DB::select('email','password')
           ->where('email','=',$email AND 'password','=',$password)
           ->from('users')->execute();
        return !($result->count() > 0);
    }


}

