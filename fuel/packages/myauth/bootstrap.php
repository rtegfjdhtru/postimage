<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

Autoloader::add_core_namespace('MyAuth'); //１箇所目：AuthをMyAuthへ変更

Autoloader::add_classes(array( //２箇所目：arrayの中身１行を残し、ほかは削除。キー名の先頭をAuthからMyAuthへ。
    'MyAuth\\Auth_Login_SimpleAuth'      => __DIR__.'/classes/auth/login/simpleauth.php',
));
