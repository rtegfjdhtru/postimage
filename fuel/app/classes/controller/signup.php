<?php
use \Model\Welcome;

class Controller_SignUp extends Controller
{

    const PASS_LENGTH_MIN = 6;
    const PASS_LENGTH_MAX = 20;


    public function action_index()
    {


        $error = '';
        $formData = '';

        $val = Validation::forge('signup_form');

        //バリデーション
        $val->add('email', 'Email')
            ->add_rule('required')
            ->add_rule('valid_email')
            ->add_rule('valid_emails', 255);

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


                if ($auth->create_user($formData['password'],$formData['email'])) {
                    //フラッシュメッセージ
                    Session::set_flash('sucMsg', 'ユーザー登録が完了しました！');
                    //リダイレクト
                    Response::redirect('home/content');
                } else {
                    Sesstion::set_flash('errMsg', '登録に失敗しました');
                }
            } else {

                $error = $val->error();

                Session::set_flash('errMsg', '登録に失敗しました');
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
//        $view->set_global('signupform',$form->build(''),false);
        $view->set_global('error', $error);
//        $view->set_global('formData',$formData);
        $data = Welcome::get_results();


        return $view;

    }
}

