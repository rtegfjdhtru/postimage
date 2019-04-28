<?php
namespace Model;

class Welcome extends \Model {

    public static function get_results()
    {
//        DB::query('INSERT INTO user(email,password) VALUE (email,password)');
        $query = DB::insert('user',array('email','password'));
        $result =  $query->execute();
    }

}