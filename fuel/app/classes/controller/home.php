<?php

class Controller_Home extends Controller_Template
{

    public $template = 'template/index';
    public function action_index()
    {





        //変数としてビューを割り当てる
        $this->template->head = view::forge('template/head');
        $this->template->header = view::forge('template/header');
        $this->template->sidemenu = view::forge('template/sidemenu');
        $this->template->content = view::forge('home/content');
        $this->template->footer = view::forge('template/footer');

        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。
    }
}

