<div class="main-banner-with-form">
    <div class="hero-slides owl-carousel owl-theme">
        <?php foreach ($rows as $id => $row):?>
            <?php
                $arr = explode('{{}}',$row);
            ?>
            <div class="banner-bg2"><?=$arr[1]?></div>
        <?php endforeach; ?>
    </div>
</div>
