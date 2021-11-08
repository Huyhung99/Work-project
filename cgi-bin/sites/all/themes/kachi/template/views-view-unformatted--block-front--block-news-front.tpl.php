<div class="sec-title-2">
    <h2 class="mb-30">Tin tức</h2>
</div>
<div class="rs-latest-list">
    <div class="latest-wrap">
        <div class="news-list-block">
            <?php $quantity = count($rows)?>
            <?php $i = 1?>
            <?php
                $cls = 'mb-40'
            ?>
            <?php foreach ($rows as $row):?>
            <?php $arr = explode('{{}}',$row);
                $title = $arr[0];
                $image = $arr[1];
                $path = $arr[2];
                $created = $arr[3];
            ?>
            <?php if ($i == ($quantity)){
                    $cls = '';
                    }?>
                <div class="news-list-item <?=$cls?>">
                    <div class="news-img">
                        <?php print $image?>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <span><?=$created?></span>
                        </div>
                        <h4 class="news-title">
                            <a href="<?=$path?>"><?=$title?></a>
                        </h4>
                        <div class="news-btn">
                            <a class="readon2 transparent" href="<?=$path?>"> Xem thêm</a>
                        </div>
                    </div>
                </div>
                <?php $i++;?>
            <?php endforeach;?>
        </div>
    </div>
</div>
