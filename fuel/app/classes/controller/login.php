<?php

class Controller_Login extends Controller
{
    const PASS_LENGTH_MIN = 6;
    const PASS_LENGTH_MAX = 20;


    public function action_index()
    {


        $error = '';
        $val = Validation::forge('login');


        //emailバリデーション

        $val->add('email', 'Email')
            ->add_rule('required')
            ->add_rule('valid_email');


        $val->add('password', 'パスワード')
            ->add_rule('required')
            ->add_rule('min_length', self::PASS_LENGTH_MIN)
            ->add_rule('max_length', self::PASS_LENGTH_MAX);


        if (Input::method() === 'POST') {
            if ($val->run()) {
                $formData = $val->validated();
                $auth = Auth::instance();
                $remember = Input::post('pass_save'); //ログイン保持チェック

                //ログインに成功したらhome画面に’飛ばす’
                if ($auth->login($formData['email'], $formData['password'])) {
                    Log::debug('ログイン成功');

                    if ($remember) {
                        Log::debug('ログイン保持チェックあり');
                        Auth::remember_me();
                    }
                    Log::debug('ホーム画面へ');
                    Response::redirect('home');
                } else {
                    Session::set_flash('common1', 'メールアドレスまたはパスワードが違います。');

                }

            } else {
                $error = $val->error();

            }
        }


        //変数としてビューを割り当てる\
        $view = View::forge('template/index');
        $view->set('head', View::forge('template/head'));
        $view->set('header', View::forge('template/header'));
        $view->set('sidemenu', View::forge('template/sidemenu'));
        $view->set('content', View::forge('login/login'));
        $view->set('footer', View::forge('template/footer'));
        $view->set_global('error', $error);
        $view->set_global('title_name', 'ログイン');//タイトル


        return $view;
        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。
    }
}

