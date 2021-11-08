<?php
?>
<div id="mam-non-chat-luong-cao">
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
<!--            [title]{{}}[field_image]{{}}[field_image_1]{{}}[field_anh_lien_quan]{{}}[[path]]{{}}[body]-->
        <?php $i = 0;
        foreach ($rows as $id => $row):?>
        <?php $arr = explode('{{}}',$row);
            $title = $arr[0];
            $field_image = $arr[1];
            $field_image_1 = $arr[2];
            $field_anh_lien_quan = $arr[3];
            $path = $arr[4];
            $body = $arr[5];
            ?>
            <?php if ($i==0){
                $active = 'active';
            }else{
                $active = '';
            }?>

            <li class="nav-item"><a aria-controls="<?=createCode($title)?>-tab" aria-selected="true" class="nav-link rounded-pill <?=$active?>" data-toggle="pill" href="#<?=$title?>-tab" id="<?=$title?>" role="tab"><?=$title?></a></li>
        <?php $i++;
        endforeach;?>
        </ul>
        <div class="tab-content" id="pills-tabContent">

        <?php
        $i = 0;
        foreach ($rows as $id => $row):?>
            <?php $arr = explode('{{}}',$row);
            $title = $arr[0];
            $field_image = $arr[1];
            $field_image_1 = $arr[2];
            $field_anh_lien_quan = $arr[3];
            $path = $arr[4];
            ?>
            <?php if ($i==0){
                $active = 'active';
            }else{
                $active = '';
            }?>
            <div aria-labelledby="<?=createCode($title)?>" class="tab-pane fade show <?=$active?>" id="<?=createCode($title)?>-tab" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-left"><?=$field_image?></div>
                    </div>

                    <div class="col-md-6">
                        <div class="image-right">
                            <?php foreach ($field_anh_lien_quan as $item):?>
                                <div class="item-img"><?=$item?></div>
                            <?php endforeach;?>
                        </div>
                    </div>

                    <div class="high-quality-preschool">
                        <h3 class="title-preschool"><?=$title?></h3>
                        <p><?=$body?></p>
                    </div>
                </div>
            </div>
        <?php $i++;
        endforeach;?>
        </div>
    </div>
</div>

