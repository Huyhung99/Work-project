<!-- Service Section Start -->
<?php
global $language;
$lang_name = $language->language;
if ($lang_name == 'vi'){
    $title = 'DỊCH VỤ';

}elseif ($lang_name == 'en'){
    $title = 'SERVICES';

}
?>

<section class="serivce-section bg-silver-light pdt-40 pdb-40" data-background="images/bg/abs-bg7.png">
    <div class="section-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title-left-part mrb-sm-30">
                        <h2 class="title"><?=$title?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <?php foreach ($rows as $row):?>
                    <div class="col-md-6 col-xl-4 col-12">
                        <?php print $row?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<!-- Service Section End -->
