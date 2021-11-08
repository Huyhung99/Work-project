<?php
global $language;
$lang_name = $language->language;
if ($lang_name == 'vi'){
   $title_path = 'Xem thêm';
}elseif ($lang_name == 'en'){
    $title_path = 'Read more';
}

?>
<?php foreach ($rows as $row):?>
    <?php $arr = explode('{{}}',$row)?>
    <?php $title = $arr[0]?>
    <?php $image = $arr[2]?>
    <?php $path = $arr[1]?>

    <div class="pic-news-home">
        <div class="pic-img"><?=$image?></div>
    </div>
    <div class="txt-news-home"><h3><?=$title?></h3><a class="view-more" href="<?=$path?>"><?=$title_path?></a></div>
<?php endforeach;?>
