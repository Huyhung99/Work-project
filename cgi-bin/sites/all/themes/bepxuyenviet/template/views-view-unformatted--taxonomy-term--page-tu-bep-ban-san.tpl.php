<!--[title_field]{{}}[field_image]{{}}[path]{{}}[commerce_price_1]{{}}[add_to_cart_form]
{{}}[field_cho_phep_dat_hang_vao_gio]{{}}[nid]{{}}[body]{{}}[field_gia_phu]{{}}[field_product]-->


<?php  foreach ($rows as $row):?>
    <?php
        $arr = explode('{{}}',$row);
        $title = $arr[0];
        $field_image = $arr[1];
        $path = $arr[2];
        $price = $arr[3];
        $add_to_cart = $arr[4];
        $field_cho_phep_dat_hang_vao_gio = $arr[5];
        $nid = $arr[6];
        $body = $arr[7];
        $field_gia_phu = $arr[8];
        $field_product = $arr[9];
    ?>
    <div class="row">
        <div class="col-md-4"><p><?=$body?></p></div>
        <div class="col-md-4"><img src="<?=$field_image?>" alt="" class="img-fluid"></div>
        <div class="col-md-4">
            <p><?=$field_product?></p>
            <p><?=$price?></p>
        </div>
    </div>
<?php endforeach;?>


