
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

                    <?php if(!empty($error)): ?>

                        <?php
                        foreach ($error as $key => $val):
                            ?>
                            <li><?=$val?></li>
                        <?php
                        endforeach;
                        ?>
                    <?php
                    endif;
                    ?>
                    <label class="c-signup-form__label">Email
                        <input type="text" name="email" class="c-signup-form__text err">
                    </label>
                    <p class="c-signup-form__text--err">メールアドレスの形式入力してください</p>
                    <label class="c-signup-form__label">パスワード
                        <input type="password" name="pass" class="c-signup-form__text">
                    </label>
                    <label class="c-signup-form__label">パスワード再入力
                        <input type="password" name="pass_re" class="c-signup-form__text">
                    </label>
                    <input type="submit" value="登録" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</main>