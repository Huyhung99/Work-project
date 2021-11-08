<div class="slide-mask" data-time="6000">
    <?php foreach ($rows as $row):?>
        <?php $arr = explode('{{}}',$row);
        $caption = trim($arr[0]);
        $image = trim($arr[1]);
        ?>
        <div class="banner-home white">
            <div class="bg-home" style="background-image:url(<?=$image?>)"></div>
            <div class="text-banner">
                <div class="box-text">
                    <h3><?=$caption?></h3>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
