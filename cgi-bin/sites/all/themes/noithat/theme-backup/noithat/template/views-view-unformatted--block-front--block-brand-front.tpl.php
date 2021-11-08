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
                    <strong>V-Italy</strong> mong muốn mang đến cho Quý khách là sự sang trọng, đẳng cấp và	tiện nghi mang đậm phong cách châu Âu. Chúng tôi chính là đơn vị hợp tác độc quyền với những thương hiệu nổi tiếng của Italy tại Việt Nam về các sản phẩm nội thất, ngoại thất, thiết bị vệ sinh...
                </p>
            <?php elseif ($lang_name == 'en'):?>
                <p>
                    <strong>V-Italy</strong> Wishing to bring to you the luxury, class and comfort of European style. We are the exclusive cooperation unit with famous Italian brands in Vietnam on interior and exterior products, sanitary ware...
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
