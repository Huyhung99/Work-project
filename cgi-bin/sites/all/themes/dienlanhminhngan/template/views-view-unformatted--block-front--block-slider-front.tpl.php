<!--[title]{{}}[field_caption]{{}}[field_link]{{}}[field_image]-->

<div class="owl-fade-one owl-carousel owl-theme" id="slider_front">
    <?php foreach ($rows as $id => $row): ?>
        <?php $arr = explode('{{}}',$row)?>
        <?php
        $title = $arr[0];
        $field_caption = $arr[1];
        $field_link = $arr[2];
        $field_image = $arr[3];
        $field_des = $arr[4];
        ?>
        <div class="item">
            <div class="slider-front" style="background-image: url('<?=trim($field_image)?>')">
                <div class="background_maumo_toi">
                  <div class="container">
                    <div class="contentSlider ">
                      <p class="contentSlider__caption"><?=$field_caption?></p>
                      <h2 class="contentSlider__title"><?=$title?></h2>
                      <div class="contentSlider__des">
                        <p><?=$field_des?></p>
                      </div>
                      <div class="contentSlider__containerBtn">
                        <span class="contentSlider__btn"><a class="site-button m-r15" href="<?=$field_link?>">Xem thêm</a></span>
                        <span class="contentSlider__btn"><a class="site-button " href="/lien-he">Liên hệ</a></span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
