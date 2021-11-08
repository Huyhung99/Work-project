<!-- /grid_item -->
<!--[commerce_price]{{}}[commerce_price_1]{{}}[view_node]{{}}[view_node_1]-->
<div class="row">
    <?php foreach ($rows as $id => $row): ?>
            <?php $arr = explode('{{}}',$row);
            $old_price = trim($arr[0]);
            $new_price = trim($arr[1]);
            $images = trim($arr[2]);
            $title = trim($arr[3])
            ?>
    <div class="col-6 col-md-3">
        <div class="grid_item">
            <figure>
                <?=$images?>
            </figure>
            <?=$title?>
            <div class="price_box">
                <?php if ($logged_in):?>
                    <span class="new_price"><?=$old_price?></span>
                    <?php if ($new_price !=$old_price):?>
                        <span class="old_price"><?=$new_price?></span>
                    <?php endif;?>
                <?php endif;?>
            </div>
            <ul>
                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Xem chi tiết"><i class="ti-eye"></i><span>Xem chi tiết</span></a></li>
                <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="ti-shopping-cart"></i><span>Thêm vào giỏ hàng</span></a></li>
            </ul>
        </div>
    </div>
    <?php endforeach; ?>
</div>

