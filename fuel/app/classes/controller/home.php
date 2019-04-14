<?php
use \Model\Welcome;
class Controller_Home extends Controller_Template
{
    public $template = 'template/index';
    public function action_index($param1 = null,$param2 = null)
    {
        //変数としてビューを割り当てる
        $this->template->head = view::forge('template/head');
        $this->template->content = view::forge('home/content');
        $this->template->footer = view::forge('template/footer');
        $data =Welcome::get_results();
        $this->template->data = $data;

        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。
    }
}
