<!--[field_image]{{}}[field_caption]{{}}[field_mo_ta_slider]{{}}[field_link]-->
<?php foreach ($rows as $id => $row):?>
<?php    $arr = explode('{{}}',$row);
    $image = trim($arr[0]);
    $caption = trim($arr[1]);
    $mo_ta = trim($arr[2]);
    $link = trim($arr[3]);?>
    <div id="home-3" class="homepage-slides owl-carousel">
<div class="single-slide-item hero-area-bg-5" style="background-image: url('<?=$image?>')">
    <div class="overlay"></div>
    <div class="hero-area-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center wow fadeInUp animated" data-wow-delay=".2s">
                    <div class="section-title">
                        <h6><?=$caption?></h6>
                        <h2 class="text-uppercase"><?=$mo_ta?></h2>
                    </div>
                    <?php if ($link != ""):?>
                        <a href="<?=$link?>" class="main-btn">XEM THÊM</a>
                        <div class="shape-one "></div>
                        <div class="shape-two "></div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>