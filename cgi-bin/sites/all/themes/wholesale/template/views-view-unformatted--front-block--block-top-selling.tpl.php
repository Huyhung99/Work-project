<?php
?>
<div class="container margin_60_35">
    <div class="main_title">
        <h2>Sản phẩm bán chạy</h2>
        <span>Bán chạy</span>
    </div>
    <div class="row small-gutters">
        <!-- /col -->
<!--        [title]{{}}[path]{{}}[field_image]{{}}[commerce_price]-->
            <?php foreach ($rows as $id => $row): ?>
                <?php $arr = explode('{{}}',$row);
                    $title = trim($arr[0]);
                    $path = trim($arr[1]);
                    $image = trim($arr[2]);
                    $old_price = trim($arr[3]);
                    $new_price = trim($arr[4]);
                ?>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <figure>
                            <a href="<?=$path?>" title="<?=$title?>">
                                <?=$image?>
                                <?=$image?>
                            </a>
                        </figure>
                        <a href="<?= $path?>" title="<?=$title?>">
                            <h3><?=$title?></h3>
                        </a>
                        <?php if ($logged_in):?>
                        <div class="price_box">
                            <?php if ($logged_in):?>
                                    <span class="new_price"><?=$old_price?></span>
                                <?php if ($new_price !=$old_price):?>
                                    <span class="old_price"><?=$new_price?></span>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <?php endif;?>
                        <ul>
                            <li><a href="<?=$path?>" class="tooltip-1" data-toggle="tooltip" data-placement="left" title="Xem chi tiết">
                                    <i class="ti-eye"></i><span>Xem chi tiết</span></a>
                            </li>
                            <li>
                                <a href="#0" class="tooltip-1 btn-add-to-cart-button" data-toggle="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="ti-shopping-cart"></i><span>Thêm vào giỏ hàng</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
    <!-- /row -->
</div>


