<?php
?>
<?php
?>

    <!--    [title]{{}}[field_images]{{}}[path]{{}}[commerce_price]{{}}[add_to_cart_form]{{}}[sku]-->

    <?php foreach ($rows as $id => $row): ?>
        <?php $arr = explode('{{}}',$row)?>
        <div class="col-lg-4  col-md-4 col-sm-4 col-xs-6  menu-item" >
            <div class="food-menu4-box">
                <?= $arr[1]?>
                <span><?=$arr[3]?></span>
                <div class="food-menu4-box-title">
                    <h3><a href="<?=$arr[2]?>"><?=$arr[0]?></a></h3>
                    <a href="<?=$arr[2]?>" class="default-btn">XEM CHI TIẾT</a>
                    <?=$arr[4]?>
                </div>
            </div>
        </div>


    <?php endforeach;?>



