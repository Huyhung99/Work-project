
    <div class="data pt-30">
        <?php foreach ($rows as $id => $row):?>
            <?php $arr = explode('{{}}',$row);
            $title = $arr[0];
            $field_image = $arr[1];
            $path = $arr[2];
            $body = $arr[3];
            $field_gia = $arr[4];
            $field_ngay = $arr[5];
            ?>
            <div class="item-packdata box bdr-10 mb-30">
                <h3 class="title-packdata">
                    <?=$title?>
                </h3>
                <p class="price-packdata"><?=number_format($field_gia,0,'.','.')?>đ/<?php if (!empty($field_ngay)) print $field_ngay?> ngày</p>
                <p><?=$body?></p>
                <p class="btn-detail"><a href="<?=$path?>" class="btn btn-white">Chi tiết</a></p>
            </div>
        <?php endforeach;?>
    </div>

