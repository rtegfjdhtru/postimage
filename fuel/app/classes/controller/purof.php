<?php

use Model\Purof;

class Controller_Purof extends Controller
{

    public function action_index()
    {

        if (!Auth::check()) {
            Response::redirect('login'); //ログインしてなかったら、コントローラーloginへ遷移
        } else {
            //ログインしているのなら
            $data = array();
            $data['user_id'] = Arr::get(Auth::get_user_id(), 1); //ユーザIDを取得
            $user_data = Model_Users::purof_getUser($data['user_id']);//現在ログイン中のユーザーの情報
            foreach ($user_data as $key => $val){
                $user_img = ($val['img']);
                print_r($user_img);
            }
        }



if(Input::method() === 'POST') {

//フォームの値を変数に格納

    Upload::process();

    if (Upload::is_valid()) { //検証に成功した場合
        Upload::save(); //ファイルを保存する


        Log::debug('アップロードできました');
    }
        $formData = array();
        $formData['nickname'] = Input::post('nickname');
        $formData['message'] = Input::post('self--text');
        $formData['img'] = Input::post('img');
        foreach (Upload::get_files() as $files) {
            $formData['img'] = (!empty($formData['img'])) ?$files['saved_as'] : $user_img;




            Purof::purof_results($formData['nickname'], $formData['message'], $formData['img'], $data['user_id']);
            Response::redirect('home'); //投稿一覧ページへリダイレクト

        }

    }else{
        Log::debug('アップロードできません');
    }






        $view = View::forge('template/index');
        $view->set('head', View::forge('template/head'));
        $view->set('header', View::forge('template/header'));
        $view->set('sidemenu', View::forge('template/sidemenu'));
        $view->set('content', View::forge('purof/purof'));
        $view->set('footer', View::forge('template/footer'));
        $view->set_global('title_name', 'マイページ');//タイトル
        $view->set_global('user_data',$user_data);//DBのユーザ情報をビューに


        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。

        return $view;
    }


}


