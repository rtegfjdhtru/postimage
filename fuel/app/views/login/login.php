
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
                        <input type="text" name="email" class="c-signup-form__text err">
                    </label>
                    <p class="c-signup-form__text--err">メールアドレスの形式入力してください</p>
                    <label class="c-signup-form__label">パスワード
                        <input type="password" name="pass" class="c-signup-form__text">
                    </label>
                    <label>
                        <p class="c-signup-form__text--err">メールアドレスの形式入力してください</p>
                        <input type="checkbox" name="pass_save">自動ログイン
                    </label>
                    <a href="">パスワードをお忘れですか？</a>
                    <input type="submit" value="ログイン" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</main>
