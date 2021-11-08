<div class="container">
    <?php $arr_color = array('pink', 'green', 'blue', 'yellow', 'violet','light-red');?>
    <div class="owl-carousel owl-theme chuong-trinh-dao-tao-front">
        <!--    [title]{{}}[field_image]{{}}[path]{{}}[body]-->
        <?php $index_color = 0;?>
        <?php foreach ($rows as $id => $row): ?>
            <?php 	$arr = explode('{{}}', $row);  //0:image, 1: title, 2: created, 3: body= ?>
            <div class="block-first-new">
                <div class="block-image-postdate">
                    <?=$arr[1];?>
                </div>
                <div class="bottom-block-img-postdate white-bg">
                    <h3 class="title-first-new-front text-center"><?=$arr[0]?></h3>
                    <p><?=$arr[3]?></p>
                    <span class="text-center link-chuong-trinh-dao-tao-front"><a class="text-<?=$arr_color[$index_color]?>" href="<?=$arr[2]?>">Xem chi tiết <i class="fas fa-chevron-right"></i></a></span>
                    <?php $index_color++;?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


