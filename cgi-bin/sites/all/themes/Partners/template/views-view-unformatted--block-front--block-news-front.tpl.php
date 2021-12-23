<?php
global $language;
if ($language->language == 'en'){
    $title = 'LATEST NEWS';
    $title_path = 'Read More';
}elseif ($language->language == 'vi'){
    $title = 'TIN TỨC';
    $title_path = 'Xem Thêm';


}
?>
<div class="blog-area home-blog default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2><?=$title?></h2>
                </div>
            </div>
        </div>
        <div class="blog-items">
            <div class="row">
                <?php foreach ($rows as $row):?>
                <?php
                    $arr = explode('{{}}',$row);
                    $image = $arr[0];
                    $title = $arr[1];
                    $body = $arr[2];
                    $path = $arr[3];
                ?>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <?=$image?>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <h4>
                                        <a href="<?=$path?>" title="<?=$title?>"><?=$title?></a>
                                    </h4>
                                    <p>
                                        <?=$body?>
                                    </p>
                                    <a class="more-btn" href="<?=$path?>"><?=$title_path?> <i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
