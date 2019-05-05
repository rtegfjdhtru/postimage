<div class="u-header--background">
    <?php
    //変数にぶちこむ
    $sucMsg = Session::get_flash('sucMsg');
    //中身があったら表示
    if(!empty($sucMsg)):
        ?>
        <div class="">
            <?=$sucMsg?>
        </div>
    <?php
    endif;

    $errMsg = Session::get_flash('errMsg');
    if(!empty($errMsg)):
        ?>
        <div class="" style="color:#fff;">
            <?=$errMsg ?>
        </div>
    <?php
    endif;
    ?>
<!--    <div class="" style="color:#fff;">-->
<!--        aaaaa-->
<!--    </div>-->

    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <header class="header">
                    <!--ハンバーガー divはグループ用-->
                    <div>
                        <a class="menu-trigger js-menu-trigger" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>

                        <?php echo Html::anchor('home/index',Asset::img('cooltext319025709534131.png',array('alt'=>'タイトル','class'=>'header--img'))); ?>

                    </div>
                    <!--検索-->
                    <form action="" method="get" class="p-search--container">
                        <input type="text" name="search" class="p-search--container__text" placeholder="検索">
                        <button type="submit" value="検索" class="p-search--container__btn"><i class="fas fa-search"></i>
                        </button>
                    </form>
                    <nav class="c-nav">
                        <ul class="c-nav__menu">
                            <li class="c-nav__menu--item"><a href="" class="c-nav__menu--link">マイページ</a></li>
                            <li class="c-nav__menu--item"><a href="" class="c-nav__menu--link">ログアウト</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
        </div>
    </div>
</div>
