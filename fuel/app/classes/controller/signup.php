<?php

class Controller_SignUp extends Controller
{

    const PASS_LENGTH_MIN = 6;
    const PASS_LENGTH_MAX = 20;


    public function action_index()
    {


        $error =  '';
        $formData = '';

        $val = Validation::forge('signup_form');

        //バリデーション
        $val->add('email','Email')
            ->add_rule('required')
            ->add_rule('min_length',1)
            ->add_rule('max_length',255);

//バリデーション
        $val->add('pass','パスワード')
            ->add_rule('required')
            ->add_rule('min_length',self::PASS_LENGTH_MIN)
            ->add_rule('max_length',self::PASS_LENGTH_MAX);

//バリデーション
        $val->add('pass_re','パスワード再入力')
            ->add_rule('match_field','pass')
            ->add_rule('required')
            ->add_rule('min_length',self::PASS_LENGTH_MIN)
            ->add_rule('max_length',self::PASS_LENGTH_MAX);


        if (Input::method() === 'POST') {  //$_POST[] みたいなやつ

//            $val = $form->validation();
            if ($val->run()) {
                $formData = $val->validated();
                $auth = Auth::instance();
                if ($auth->create_user($formData['email'], $formData['password'])) {
                     //フラッシュメッセージ
                    Session::set_flash('sucMsg', 'ユーザー登録が完了しました！');
                    //リダイレクト
                    Response::redirect('home/content');
                    }else{
                    Sesstion::set_flash('errMsg', '登録に失敗しました');
                }
            }else{

                $error = $val->error();

                Session::set_flash('errMsg','登録に失敗しました');
            }
            //フォームにpostした値をセット
//            $val->repopulate();
        }


        //変数としてビューを割り当てる
        $view = View::forge('template/index');
        $view->set('head',View::forge('template/head'));
        $view->set('header',View::forge('template/header'));
        $view->set('sidemenu',View::forge('template/sidemenu'));
        $view->set('content',View::forge('auth/signup'));
        $view->set('footer',View::forge('template/footer'));
//        $view->set_global('signupform',$form->build(''),false);
        $view->set_global('error',$error);
//        $view->set_global('formData',$formData);

        return $view;




//        $this->template->head = view::forge('template/head');
//        $this->template->header = view::forge('template/header');
//        $this->template->sidemenu = view::forge('template/sidemenu');
//        $this->template->content = view::forge('auth/signup');
//        $this->template->footer = view::forge('template/footer');
//        $this->template->signupform = view::set_global('signupform',$form->build(''),false);
//        $this->template->error = view::set_global('error',$error);
//        $this->template->formdata = view::set_global('formdata',$formdata);


        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。
    }
}

