<div class="feature-preduct-area home-page-2">
<?php
//[title_field]{{}}[commerce_price]{{}}[path]{{}}[field_image]{{}}[field_cho_phep_dat_hang_vao_gio]
foreach ($rows as $id => $row):?>
    <?php $product = explode('{{}}',$row);
        $title = $product[0];
        $price = $product[1];
        $path = $product[2];
        $image = $product[3];
        $state_product = $product[4];
    ?>
    <div class="single-new-product">
        <div class="product-img">
            <a href="<?=$path?>">
                <img src="<?=$image?>" class="first_img" alt="<?=$title?>" title="<?=$title?>" />
                <img src="<?=$image?>" class="seceond_img" alt="<?=$title?>" title="<?=$title?>"/>
            </a>
        </div>
        <div class="product-content text-justify">
            <h3><a href="<?=$path?>"><?=$title?></a></h3>
            <?php if ($state_product == 'Có   '):?>
                <h4><?=$price?></h4>
            <?php endif;?>
        </div>
    </div>
<?php endforeach;?>
</div>
