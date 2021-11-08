<?php
global $language ;
$lang_name = $language->language ;
?>
<div class="content-main grey">
    <div class="content-center">
        <div class="title-main">
            <h2><?= t('Brand')?></h2>
        </div>
        <div class="text-intro">
            <?php if ($lang_name == 'vi'):?>
                <p>
                    <strong>NAFOCO</strong> mong muốn mang đến cho Quý khách là sự sang trọng, đẳng cấp và	tiện nghi mang đậm phong cách mọi nhà. Sản phẩm của chúng tôi luôn đạt chất lượng tốt nhất đem lại sự hài lòng cho khách hàng.
                </p>
            <?php elseif ($lang_name == 'en'):?>
                <p>
                    <strong>V-Italy</strong> Wishing to bring to you the luxury, class and comfort of European style. Our products always achieve the best quality to bring satisfaction to customers.
                </p>
            <?php endif;?>
        </div>
        <div class="list-brand">
            <ul>
                <?php foreach ($rows as $row):?>
                    <li>
                        <?=$row?>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
