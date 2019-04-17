
<main class="u-bgColor-Lightgray">
    <div class="container u-content-padding">
        <div class="row">
            <div class="col-sm">
                <h4 class="h4 text-center"><span>パスワード変更</span></h4>
            </div>
        </div>

        <!--input err で赤に-->
        <div class="row">
            <div class="col-sm-7 c-signup-form--center">
                <form action="" method="post" class="c-signup-form">
                    <label class="c-signup-form__label">古いパスワード
                        <input type="text" name="old_pass" class="c-signup-form__text err">
                    </label>
                    <p class="c-signup-form__text--err">メールアドレスの形式入力してください</p>
                    <label class="c-signup-form__label">新しいパスワード
                        <input type="password" name="new_pass" class="c-signup-form__text">
                    </label>
                    <label class="c-signup-form__label">新しいパスワード再入力
                        <input type="password" name="new_pass_re" class="c-signup-form__text">
                    </label>
                    <input type="submit" value="変更" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</main>