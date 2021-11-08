<?php
?>
<div class="section-full p-b0  bg-white" >
    <div class="container">
        <!-- TITLE START-->
        <div class="section-head text-center">
            <h2 data-title="<?=t('ADVISORY')?>" class="color-red"><?php print t('ADVISORY')?></h2>
            <div class="mt-separator-outer">
                <div class="mt-separator bg-primary"></div>
            </div>
        </div>
        <!-- TITLE END-->
        <div class="section-content ">
            <div class="row">
                <!-- Block 1 -->
                <!--                [title]{{}}[field_image]{{}}[path]{{}}[body]-->
                <?php foreach ($rows as $id => $row): ?>
                    <div class="col-md-4 col-xs-12">
                        <?php $arr = explode('{{}}',$row);
                        $title = trim($arr[0]);
                        $field_image = trim($arr[1]);
                        $path = trim($arr[2]);
                        ?>
                        <div class="blog-post latest-blog-1 date-style-2 overflow-hide  bg-white bdr-1 bdr-solid bdr-gray-light ">
                            <div class="mt-post-media">
                                <?=$field_image?>
                            </div>
                            <div class="mt-post-info  p-a30 services">
                                <div class="mt-post-title ">
                                    <h4 class="post-title"><?=$title?></h4>
                                </div>

                                <a href="<?=$path?>" class="site-button-link"><?= t('READ MORE')?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</div>

