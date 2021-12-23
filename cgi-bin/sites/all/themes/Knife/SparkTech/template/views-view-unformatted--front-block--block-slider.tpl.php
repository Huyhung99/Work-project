<div class="my-slider">
<?php
    foreach ($rows as $row):
        $arr = explode('{{}}',$row);
    $title = $arr[0];
    $image = $arr[1];
    $link = $arr[2];
    $body = $arr[3];
        ?>
        <div class="section section--hero scroll-activate scroll-activate-trigger">
            <div class="section__bg">
                <div class="section__bg-inner img-to-bg">
                    <?=$image?>
                </div>
            </div>
            <div class="container pt-50 pt-mb-0 mt-30">
                <div class="mw940">
                    <h1><?=$title?></h1>
                    <div class="summary summary--large">
                        <?=$body?>
                    </div>
                    <div class="action">
                        <a href="<?=$link?>" class="btn btn--outline">Liên hệ </a>
                    </div>
                </div>
            </div>
        </div>
<?php endforeach; ?>
</div>
