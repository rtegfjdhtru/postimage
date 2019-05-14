


<main class="u-bgColor-Lightgray">
    <div class="container u-content-padding">
        <div class="row">
            <div class="col-sm">
                <h4 class="h4 text-center"><span>ログイン</span></h4>
            </div>
        </div>

        <!--input err で赤に-->
        <div class="row">
            <div class="col-sm-7 c-signup-form--center">
                <form action="" method="post" class="c-signup-form">
                    <label class="c-signup-form__label">Email
                        <input type="text" name="email" class="c-signup-form__text <?php if(!empty($error['email'])) echo 'err'; ?>"
                        value="<?php if(!empty($error)) echo Input::post('email'); ?>">
                    </label>
                    <?php if(!empty($error['email'])) echo '<p class="c-signup-form__text--err">'.$error['email'].'</p>'; ?>


                    <label class="c-signup-form__label">パスワード
                        <input type="password" name="password" class="c-signup-form__text  <?php if(!empty($error['password'])) echo 'err'; ?>">
                    </label>

                        <?php if(!empty($error['password'])) echo '<p class="c-signup-form__text--err">'.$error['password'].'</p>'; ?>
                    <?php if(!empty($login_miss)) echo '<p class="c-signup-form__text--err">'.$login_miss.'</p>'; ?>

                    <?php $commonMsg = Session::get_flash('common1'); //メールまたはパスワードが違うやつ?>
                   <?php if(!empty($commonMsg)) echo '<p class="c-signup-form__text--err">'.$commonMsg.'</p>'; ?>



                    <div><input type="checkbox" name="pass_save">自動ログイン </div>

                    <?php echo Html::anchor('passreissue','パスワードをお忘れですか？'); ?>
                    <input type="submit" value="ログイン" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</main>
