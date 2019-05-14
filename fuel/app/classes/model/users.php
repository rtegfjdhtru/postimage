<?php
class Model_Users extends \Model{
    public static function purof_getUser($id){
        $query = \DB::select()->from('users')->where('id',$id)->execute()->as_array();
        return $query;
    }
}