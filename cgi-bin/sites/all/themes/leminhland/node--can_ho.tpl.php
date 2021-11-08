<?php
if (isset($node->field_dien_tich_thong_thuy['und'][0]['value'])){
    $dien_tich_thong_thuy = $node->field_dien_tich_thong_thuy['und'][0]['value'];
}else{
    $dien_tich_thong_thuy = '';
}
?>
<div class="page-apartment">
    <div class="img-apartment">
        <?php $path = image_style_url('940_x_720',$node->field_image['und'][0]['uri'])?>
        <img src="<?=$path?>" class="img-fluid" alt="<?=$node->field_image['und'][0]['alt']?>" title="<?=$node->field_image['und'][0]['title']?>"/>
    </div>
    <div class="content-apartment">
        <h3 class="title-apartment"><?=$node->title?></h3>
        <h3 class="text-right"><span>Diện tích thông thủy: </span> <span><?=$dien_tich_thong_thuy?> M<sup>2</sup></span></h3>
    </div>
    <div class="body-apartment">
        <?php print render($content)?>
    </div>
</div>
<img class="lozad" data-src="[field_image]" alt="[field_image-alt]" width="[field_image-width]px" height="[field_image-height]px"/>
