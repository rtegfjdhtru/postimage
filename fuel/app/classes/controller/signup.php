<?php


class Controller_SignUp extends Controller
{

    const PASS_LENGTH_MIN = 6;
    const PASS_LENGTH_MAX = 20;


    public function action_index()
    {


        $error = '';
//        $formData = '';

        $val = Validation::forge('signup_form');
        $val->add_callable('MyValidation');

        $val->add('username', '名前')
            ->add_rule('required');

        //バリデーション

        $val->add('email', 'Email')
            ->add_rule('required')
            ->add_rule('valid_email')
            ->add_rule('unique_email');
        $val->set_message('unique_email', 'すでに登録されているメールアドレスです');


//バリデーション
        $val->add('password', 'パスワード')
            ->add_rule('required')
            ->add_rule('min_length', self::PASS_LENGTH_MIN)
            ->add_rule('max_length', self::PASS_LENGTH_MAX);

//バリデーション
        $val->add('password_re', 'パスワード再入力')
            ->add_rule('match_field', 'password')
            ->add_rule('required')
            ->add_rule('min_length', self::PASS_LENGTH_MIN)
            ->add_rule('max_length', self::PASS_LENGTH_MAX);


        if (Input::method() === 'POST') {  //$_POST[] みたいなやつ


            if ($val->run()) {
                $formData = $val->validated();
                $auth = Auth::instance();

                if ($auth->create_user($formData['username'], $formData['password'], $formData['email'])) {
                    //フラッシュメッセージ
//                    Session::set_flash('sucMsg', 'ユーザー登録が完了しました！');
                    //リダイレクト
                    Response::redirect('home');
                } else {
//                    Sesstion::set_flash('errMsg', 'サーバーエラー');
                }
            } else {

                $error = $val->error();

//                Session::set_flash('errMsg', '登録に失敗しました');
            }
            //フォームにpostした値をセット

        }


        //変数としてビューを割り当てる
        $view = View::forge('template/index');
        $view->set('head', View::forge('template/head'));
        $view->set('header', View::forge('template/header'));
        $view->set('sidemenu', View::forge('template/sidemenu'));
        $view->set('content', View::forge('auth/signup'));
        $view->set('footer', View::forge('template/footer'));
        $view->set_global('error', $error);
        $view->set_global('title_name','新規登録');//タイトル


        return $view;

    }
}

