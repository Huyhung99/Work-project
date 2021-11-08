<?php
global $language;
$lang_name = $language->language;
?>
<?php if ($lang_name == 'vi'):?>
<?php $path = 'loai-san-pham/day-chuyen-san-xuat'?>
<?php elseif($lang_name == 'en'):?>
<?php $path = '/loai-san-pham/production-line'?>
<?php endif; ?>
<div class="block-category ani-item">
    <div class="wrap-content-large">
        <div class="category-name"><h2><?= t($view->get_title()) ?></h2></div>
        <div class="list-product">
            <?php foreach ($rows as $row): ?>
                <?php $row = explode('{{}}', $row); ?>
                <div class="item-product  cate-265 style-3 color-1 brand-9">
                    <a href="<?= $row[2] ?>" class="link-load">
                        <div class="pic-product">

                            <div class="pic-img"><img
                                    src="<?= $row[1] ?>"
                                    alt="<?= $row[0] ?>">
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="view-more" href="<?=$path?>"><?= t('View more') ?></a></div>
</div>
