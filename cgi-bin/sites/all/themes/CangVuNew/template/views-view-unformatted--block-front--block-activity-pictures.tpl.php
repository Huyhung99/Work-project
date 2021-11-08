
<div class="wrapper">
    <div class="owl-carousel" id="activity_pictures">
    <?php foreach ($rows as $id => $row):?>
        <?php $arr = explode('{{}}',$row)?>
        <?php $title = $arr[0]?>
        <?php $path_image = $arr[1]?>
        <?php $image = image_style_url('840_x_530',$path_image)?>
        <?php $path = $arr[2]?>
        <div class="item-slider">
            <a href="<?=$path?>" title="<?=trim($title)?>">
                <img src="<?=trim($image)?>" alt="<?=trim($title)?>" title="<?=trim($title)?>" class="img-fluid"/>
            </a>
            <h3 class="title-slider">
                <a href="<?=$path?>"><?=$title?></a>
            </h3>
        </div>
    <?php endforeach;?>
    </div>
</div>
