<div class="widget">
    <div class="widget-title">
        <h4 class="text-uppercase">Sản phẩm liên quan</h4>
    </div>
    <ul class="comments-list">
<!--        [field_images]{{}}[title_field]{{}}[commerce_price]{{}}[path]-->
        <?php foreach ($rows as $id => $row):?>
            <?php $arr = explode('{{}}',$row);
                $image = trim($arr[0]);
                $title = trim($arr[1]);
                $old_price = trim($arr[2]);
                $path = trim($arr[3]);
                $new_price = trim($arr[4]);
            ?>
            <li>
                <div class="alignleft">
                    <a href="<?=$path?>" title="<?=$title?>">
                        <?= $image?>
                    </a>
                </div>
                <h3><a href="<?=$path?>" title="<?=$title?>"><?=$title?></a></h3>
                <?php if ($logged_in):?>
                    <span class="new_price"><?=$old_price?></span>
                    <?php if ($new_price !=$old_price):?>
                    <span class="old_price"><?=$new_price?></span>
                    <?php endif;?>
                <?php endif;?>
            </li>
        <?php endforeach;?>
    </ul>
</div>

