<!--[title]{{}}[field_caption]{{}}[field_image]{{}}[path]{{}}[field_background_trang_chu]-->
<?php
global $language ;
$lang_name = $language->language ;
?>
<?php if ($lang_name == 'vi'):?>
    <p>
        <strong>V-Italy</strong> mong muốn mang đến cho Quý khách là sự sang trọng, đẳng cấp và	tiện nghi mang đậm phong cách châu Âu. Chúng tôi chính là đơn vị hợp tác độc quyền với những thương hiệu nổi tiếng của Italy tại Việt Nam về các sản phẩm nội thất, ngoại thất, thiết bị vệ sinh...
    </p>
<?php elseif ($lang_name == 'en'):?>
    <p>
        <strong>V-Italy</strong> Wishing to bring to you the luxury, class and comfort of European style. We are the exclusive cooperation unit with famous Italian brands in Vietnam on interior and exterior products, sanitary ware...
    </p>
<?php endif;?>
<div class="slide-mask" data-time="6000">
    <?php foreach ($rows as $row):?>
        <?php $arr = explode('{{}}',$row);
        $title = trim($arr[0]);
        $field_caption = trim($arr[1]);
        $image = trim($arr[2]);
        $path = trim($arr[3]);
        $background = trim($arr[4]);
        ?>
        <div class="banner-home white">
            <div class="bg-home" style="background-image:url('<?=$background?>')"></div>
            <div class="text-banner">
                <div class="logo-item">
                    <?=$image?>
                </div>
                <?php if ($lang_name == 'vi'):?>
                    <div class="box-text">
                        <span>Bộ sưu tập</span>
                        <h3><?=$title?></h3>
                        <p><?=$field_caption?></p>
                        <a class="view-more" href="<?=$path?>">xem thêm</a>
                    </div>
                <?php elseif ($lang_name == 'en'):?>
                    <div class="box-text">
                        <span>Collections</span>
                        <h3><?=$title?></h3>
                        <p><?=$field_caption?></p>
                        <a class="view-more" href="<?=$path?>">Read more</a>
                    </div>
                <?php endif;?>

            </div>
        </div>
    <?php endforeach;?>
</div>
