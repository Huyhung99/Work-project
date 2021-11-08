<?php
?>
<div class="">
    <div class="owl-carousel mam-non-chat-luong-cao-mobile">

                <?php foreach ($rows as $id => $row):?>
                    <?php $arr = explode('{{}}',$row);
                    $title = $arr[0];
                    $field_image = $arr[1];
                    $field_image_1 = $arr[2];
                    $field_anh_lien_quan = explode(',',$arr[3]);
                    $path = $arr[4];
                    $body = $arr[5];
                    ?>
                    <div class="item-mam-non">
                        <div class="row pb-10-mb background-color-sli">
                            <div class="col-8 plr-5-mb pb-10-mb ">
                                <div class="image-left"><?=$field_image_1?></div>
                            </div>
                            <?php foreach ($field_anh_lien_quan as $item):?>
                                    <div class="col-4 plr-5-mb ">
                                        <div class="item-img"><?=$item?></div>
                                    </div>
                                <?php endforeach;?>
                            <div class="high-quality-preschool">
                                <h3 class="title-preschool"><?=$title?></h3>
                                <p class="text-justify"><?=$body?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>

    </div>
</div>



