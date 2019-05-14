<?php

class Controller_Logout extends Controller
{


    public function action_index()
    {

       $auth=Auth::instance();
       $auth->logout();

        Response::redirect('login');


    }
}

