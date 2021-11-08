<?php
//[field_caption]{{}}[field_image]{{}}[title]
    foreach ($rows as $id => $row){
        $arr = explode('{{}}',$row);
        $title = $arr[0];
        $subtitle = $arr[2];
        $image = $arr[1];
    }
?>
<div class="owl-carousel" id="header-slider">
<?php foreach ($rows as $id => $row):?>

        <div class="item">
            <?=$image?>
        </div>
<?php endforeach;?>
</div>

<div class="container">
    <div class="header-content hidden-mobile">
        <div class="row m-r0">
            <div class="col-md-2">
                <img src="/sites/default/files/logo-1.png" alt="Cảng vụ hàng hải Đà Nẵng" class="img-fluid">
            </div>
            <div class="col-md-10">
                <h2 class="title-sub-slider text-uppercase">
                   <?=$subtitle?>
                </h2>
                <h1 class="title-slider text-uppercase">
                    <?=$title?>
                </h1>
            </div>
        </div>
    </div>
</div>


