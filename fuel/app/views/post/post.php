<?php
/**
 * Created by PhpStorm.
 * User: kunotota
 * Date: 2019-04-18
 * Time: 01:35
 */?>


<main>

    <section class="u-bgColor-Lightgray u-content-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <form action="" method="post" class="p-purof">
                        <input type="text" name="name" placeholder="タイトル" class="p-purof__text">
                        <input type="text" name="self--text" placeholder="説明" class="p-purof__text">
                        <!-- 画像プレビュー-->
                        画像
                        <label class="p-purof__area" id="app1">

                            <input type="file" name="img" class="p-purof__file" v-on:change="changePrev">
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000">
                            <div v-if="preview" class="p-purof__area--cover"><img v-bind:src="preview"
                                                                                  class="p-purof__img"></div>
                            ドラック&ドロップもしくはクリック

                        </label>



                        <input type="submit" value="投稿" class="btn btn-primary u-btn-width">
                    </form>

                </div>
            </div>

        </div>
    </section>


</main>