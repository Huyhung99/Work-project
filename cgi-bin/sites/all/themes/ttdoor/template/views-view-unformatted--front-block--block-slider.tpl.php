<!--[field_image]{{}}[field_headline]{{}}[field_tagline]{{}}[field_link]-->
<div class="owl-carousel" id="slidermain">
<?php foreach ($rows as $id => $row): ?>
<?php $arr = explode('{{}}',$row);
$image = trim($arr[0]);
$slideTitle = '';
$subTitle = '';
$link = '';
if(isset($arr[1]))
    $slideTitle = trim($arr[1]);
if(isset($arr[2]))
    $subTitle = trim($arr[2]);
if(isset($arr[3]))
    $link = trim($arr[3]);
?>
<div class="item">
    <?=$image?>
</div>
<?php endforeach;?>
</div>