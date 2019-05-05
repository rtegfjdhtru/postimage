<?php

class Controller_Login extends Controller
{
    const PASS_LENGTH_MIN = 6;
    const PASS_LENGTH_MAX = 20;


    public function action_index()
    {


        $error = '';

        $val = Validation::forge('login');
//        $val->add_callable('MyValidation');

        //emailバリデーション

        $val->add('email', 'Email')
            ->add_rule('required')
            ->add_rule('valid_email');


        $val->add('password', 'パスワード')
            ->add_rule('required')
            ->add_rule('min_length', self::PASS_LENGTH_MIN)
            ->add_rule('max_length', self::PASS_LENGTH_MAX);


//            ->add_rule('unique_loginCheck');
//        $val->set_message('unique_loginCheck', 'メールまたはパスワードが違います。');


        if (Input::method() === 'POST') {
            if ($val->run()) {
                $formData = $val->validated();
                $auth = Auth::instance();
                //ログインに成功したらhome画面に’飛ばす’
                if ($auth->login($formData['email'], $formData['password'])) {
                    Response::redirect('home');

                }
            } else {

                $error = $val->error();
            }
        } else {
            //認証が失敗したときの処理
            Session::set_flash('errMsg', 'メールアドレスまたはパスワードが違います。');
        }


        //変数としてビューを割り当てる\
        $view = View::forge('template/index');
        $view->set('head', View::forge('template/head'));
        $view->set('header', View::forge('template/header'));
        $view->set('sidemenu', View::forge('template/sidemenu'));
        $view->set('content', View::forge('login/login'));
        $view->set('footer', View::forge('template/footer'));
        $view->set_global('error', $error);


        return $view;
        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。
    }
}

