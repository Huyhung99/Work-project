<?php
global $language ;
$lang_name = $language->language ;
?>

<div class="content-main white">
    <div class="content-center">
        <div class="title-main">
            <?php if ($lang_name == 'vi'):?>
                <h2>Sản phẩm</h2>
            <?php elseif ($lang_name == 'en'):?>
                <h2>Product</h2>
            <?php endif;?>
        </div>
        <div class="slide-product">
            <?php foreach ($rows as $row):?>
                <?php $arr = explode('{{}}',$row);
                    $name = $arr[0];
                    $image = $arr[1];
                    $path = $arr[2];
                ?>
                <div class="product-item">
                    <a class="link-load" href="<?=$path?>">
                        <div class="pic-img">
                            <?=$image?>
                        </div>
                        <div class="title-product">
                            <?php if ($lang_name == 'vi'):?>
                                <span>Bộ Sản Phẩm</span>
                                <h3><?=$name?></h3>
                                <div class="go">Go</div>
                            <?php elseif ($lang_name == 'en'):?>
                                <span>Categories</span>
                                <h3><?=$name?></h3>
                                <div class="go">Go</div>
                            <?php endif;?>

                        </div>
                    </a>
                </div>

            <?php endforeach;?>
        </div>
    </div>
</div>
