<?php
class Model_Post extends \Model_Crud{
    //①テーブルの名前を登録する
    protected static $_table_name = 'user';
    //②テーブルの主キーを登録する
    protected static $_primary_key = 'id';
}