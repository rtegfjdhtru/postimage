<?php

class Controller_Post extends Controller
{


    public function action_index()
    {

        if(!Auth::check()){
            Response::redirect('login'); //ログインしてなかったら、コントローラーloginへ遷移
        }
        else{
            //ログインしているのなら
            $data = array();
            $data['username'] = Auth::get_screen_name(); //ユーザ名を取得
            $data['user_id'] = Arr::get(Auth::get_user_id(),1); //ユーザIDを取得


        }




        $view = View::forge('template/index');
        $view->set('head', View::forge('template/head'));
        $view->set('header', View::forge('template/header'));
        $view->set('sidemenu', View::forge('template/sidemenu'));
        $view->set('content', View::forge('post/post'));
        $view->set('footer', View::forge('template/footer'));
        $view->set_global('title_name','ホーム');//タイトル

        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。

        return $view;
    }
}


