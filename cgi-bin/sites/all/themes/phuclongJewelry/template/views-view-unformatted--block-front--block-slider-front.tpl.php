<?php
//[title_field]{{}}[field_caption]{{}}[field_image]{{}}[field_link]

?>
<div class="home-slider-wrapper clearfix">
    <div class="camera_wrap" id="home-slider">
        <?php
        foreach ($rows as $id => $row):?>
            <?php  $arr = explode('{{}}',$row);
            if (!empty($arr[0])){
                $field_title = trim($arr[0]);
            }
            if (!empty($arr[1])){
                $field_caption = trim($arr[1]);
            }
            if (!empty($arr[2])){
                $field_image = trim($arr[2]);
            }
            if (!empty($arr[3])){
                $field_link = trim($arr[3]);
            }
            ?>
            <div data-src="<?=$field_image?>">
                <div class="camera_caption camera_image-caption_2 moveFromLeft" style="visibility: hidden;">
                    <h2 class="caption"><?=$field_caption?></h2>
                </div>
                <?php if (!empty($field_link)):?>
                <div class="camera_cta_1">
                    <a href="<?=$field_link?>" class="btn">Xem thêm</a>
                </div>
                <?php endif;?>
            </div>
        <?php endforeach;?>
    </div>
</div>
