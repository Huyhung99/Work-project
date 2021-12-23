<?php global $language;?>
<?php if ($language->language == 'en'){
    $title = 'Contact us';
}else{
    $title = 'Liên hệ';
}?>
<div class="banner-area inc-content shadow shape default">
    <div id="bootcarousel" class="carousel slide text-light carousel-fade animate_text" data-ride="carousel">
        <div class="carousel-indicator">
            <ol class="carousel-indicators">
                <?php $nav = 0;?>
                <!-- End Wrapper for slides -->
                <?php foreach ($rows as $row):?>
                    <?php if ($nav==0):?>
                        <li data-target="#bootcarousel" data-slide-to="<?=$nav?>" class="active"></li>
                    <?php else:?>
                        <li data-target="#bootcarousel" data-slide-to="<?=$nav?>"></li>
                    <?php endif;?>
                <?php $nav++;?>
                <?php endforeach;?>
            </ol>
        </div>
        <div class="carousel-inner carousel-zoom">
        <?php
        $i = 0;

        foreach ($rows as $row):?>
            <?php
            $arr = explode('{{}}',$row);
            $field_caption = $arr[0];
            $field_image = $arr[1];
            $field_link = $arr[2];
            $field_mo_ta_slider = $arr[3];
            ?>
            <?php if ($i==0):?>
                    <div class="carousel-item active">
                        <div class="slider-thumb bg-cover" style="background-image: url(<?=$field_image?>);"></div>
                        <div class="box-table">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="content">
                                                <h2 data-animation="animated slideInDown"><?=$field_caption?></h2>
                                                <p data-animation="animated slideInRight">
                                                    <?= $field_mo_ta_slider?>
                                                </p>
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="<?=$field_link?>"><?=$title?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else:?>
                    <div class="carousel-item ">
                        <div class="slider-thumb bg-cover" style="background-image: url(<?=$field_image?>);"></div>
                        <div class="box-table">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="content">
                                                <h2 data-animation="animated slideInDown"><?=$field_caption?></h2>
                                                <p data-animation="animated slideInRight">
                                                    <?= $field_mo_ta_slider?>
                                                </p>
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="<?=$field_link?>"><?=$title?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
        <?php $i++;?>
        <?php endforeach; ?>
        </div>
    </div>
</div>