<?php
namespace Model;

class Post extends \Model {

    public static function get_results()
    {
//        DB::query('INSERT INTO user(email,password) VALUE (email,password)');
        $query = DB::insert('users',array('email','password'))->execute();
//        $result =  $query->execute();
        return $query;
    }

}