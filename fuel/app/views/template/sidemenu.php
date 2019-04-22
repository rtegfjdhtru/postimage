<?php
/**
 * Created by PhpStorm.
 * User: kunotota
 * Date: 2019-04-14
 * Time: 17:08
 */
?>


<div class="p-side__menu">
    <nav class="p-side__menu--nav">
        <ul class="p-side__menu--nav--menu">
            <li class="p-side__menu--nav--menu--item"><?php echo Html::anchor('home/index','<i class="nav-fas fas fa-home"></i>ホーム',array('class'=>'p-side__menu--nav--menu--link')); ?></li>

            <li class="p-side__menu--nav--menu--item"><?php echo Html::anchor('purof/purof','<i class="nav-fas fas fa-user"></i>マイページ',array('class'=>'p-side__menu--nav--menu--link')); ?></li>

            <li class="p-side__menu--nav--menu--item"><?php echo Html::anchor('home/index','<i class="nav-fas fas fa-camera"></i>投稿',array('class'=>'p-side__menu--nav--menu--link')); ?></li>


            <li class="p-side__menu--nav--menu--item"><?php echo Html::anchor('home/index','<i class="nav-fas fas fa-heart"></i>いいね',array('class'=>'p-side__menu--nav--menu--link')); ?></li>


            <li class="p-side__menu--nav--menu--item"><?php echo Html::anchor('home/index','<i class="nav-fas fas fa-sign-out-alt"></i>ログアウト',array('class'=>'p-side__menu--nav--menu--link')); ?></li>
        </ul>
    </nav>
</div>


