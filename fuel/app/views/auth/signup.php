
<main class="u-bgColor-Lightgray">
    <div class="container u-content-padding">
        <div class="row">
            <div class="col-sm">
                <h4 class="h4 text-center"><span>新規登録</span></h4>
            </div>
        </div>


        <!--input err で赤に-->
        <div class="row">
            <div class="col-sm-7 c-signup-form--center">
                <form action="" method="post" class="c-signup-form">


                    <label class="c-signup-form__label">名前
                        <input type="text" name="username" class="c-signup-form__text <?php if(!empty($error['username'])) echo 'err'; ?>"  value="<?php if(!empty($error)) echo Input::post('username'); ?>">
                    </label>
                    <?php if(!empty($error['username'])) echo '<p class="c-signup-form__text--err">'.$error['username'].'</p>' ;?>

                    <label class="c-signup-form__label">Email
                        <input type="text" name="email" class="c-signup-form__text <?php if(!empty($error['email'])) echo 'err'; ?>"  value="<?php if(!empty($error)) echo Input::post('email'); ?>">
                    </label>
                    <?php if(!empty($error['email'])) echo '<p class="c-signup-form__text--err">'.$error['email'].'</p>' ;?>

                    <label class="c-signup-form__label">パスワード
                        <input type="password" name="password" class="c-signup-form__text <?php if(!empty($error)) echo 'err'; ?>">
                    </label>
                        <?php if(!empty($error['password'])) echo '<p class="c-signup-form__text--err">'.$error['password'].'</p>' ;?>

                    <label class="c-signup-form__label">パスワード再入力
                        <input type="password" name="password_re" class="c-signup-form__text <?php if(!empty($error)) echo 'err'; ?>">
                    </label>
                    <?php if(!empty($error['password_re'])) echo '<p class="c-signup-form__text--err">'.$error['password_re'].'</p>' ;?>


                    <input type="submit" value="登録" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</main>