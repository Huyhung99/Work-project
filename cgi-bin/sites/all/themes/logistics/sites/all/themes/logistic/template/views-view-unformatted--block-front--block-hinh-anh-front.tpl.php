<div class="image-company">
    <div class="grid-title m-b40">
        <h3 class="title">
            HÌNH ẢNH CÔNG TY
        </h3>
        <div class="content-image-company">
            <?php foreach ($rows as $id => $row): ?>
                <?php
                $arr = explode('{{}}',$row);
                $title = $arr[1];
                $images = explode(', ',$arr[0]);
                foreach ($images as $image):
                    ?>
                    <a href="<?=trim($image)?>" title="<?=trim($title)?>"><img src="<?=trim($image)?>" title="<?=trim($title)?>" alt="<?=trim($title)?>"></a>
                <?php endforeach;?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

