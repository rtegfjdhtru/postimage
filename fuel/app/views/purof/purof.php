<main>
    <section class="u-bgColor-Lightgray u-content-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <form action="" method="post" class="p-purof" enctype="multipart/form-data">
                        <?php foreach ($user_data

                        as $key => $val): ?>
                        <input type="text" name="nickname" placeholder="ニックネーム" class="p-purof__text"
                               value="<?php echo $val['nickname']; ?>">
                        <input type="text" name="self--text" placeholder="自己紹介" class="p-purof__text"
                               value="<?php echo $val['message']; ?>">

                        <!-- 画像プレビュー-->

                        画像


                        <label class="p-purof__area" id="app1">

                            <input type="file" name="img" class="p-purof__file" v-on:change="changePrev">


                            <div v-if="preview" class="p-purof__area--cover"><img v-bind:src="preview"
                                                                                  class="p-purof__img">
                            </div>
                            <!--                        アップロードしたファイル-->
                            <?php echo Asset::add_path('assets/upload/', 'img'); ?>
                            <?php echo Asset::img($val['img'], array('class' => 'p-purof__img')); ?>
                            <?php endforeach; ?>
                            ドラック&ドロップもしくはクリック
                        </label>
                        <input type="submit" value="変更" class="btn btn-primary u-btn-width">
                    </form>

                </div>
            </div>

        </div>
    </section>


</main>