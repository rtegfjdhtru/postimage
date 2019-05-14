<?php

class Controller_PassReissue extends Controller
{

    public function action_index()
    {
        //変数としてビューを割り当てる
        $view = View::forge('template/index');
        $view->set('head', View::forge('template/head'));
        $view->set('header', View::forge('template/header'));
        $view->set('sidemenu', View::forge('template/sidemenu'));
        $view->set('content', View::forge('passreissue/reissue'));
        $view->set('footer', View::forge('template/footer'));
        $view->set_global('title_name','パスワード再発行');//タイトル



        return $view;
        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。
    }
}

