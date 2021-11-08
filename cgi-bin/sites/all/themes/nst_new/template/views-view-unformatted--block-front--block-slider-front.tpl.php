<?php
global $language;
$lang_name = $language->language;
if ($lang_name == 'vi'){
    $titleContact = 'LIÊN HỆ';
    $path = '/lien-he';
}elseif ($lang_name == 'en'){
    $titleContact = 'CONTACT';
    $path = '/contact';
}
?>
<section class="banner-section">
    <div class="home-carousel owl-theme owl-carousel">
        <?php foreach ($rows as $row):?>
            <?php
            $arr = explode('{{}}',$row);
            $title = trim($arr[0]);
            $field_image = trim($arr[1]);
            $field_caption = trim($arr[2]);
            $field_link = trim($arr[3]);
            $field_description = trim($arr[4]);
            ?>
            <div class="slide-item">
                <div class="image-layer" data-background="<?=$field_image?>"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                            <div class="content-box">
                                <h2><?=$title?></h2>
                                <p><?=$field_description?></p>
                                <div class="btn-box">
                                    <a href="<?=$field_link?>" class="cs-btn-one btn-gradient-color"><?=$titleContact?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>
