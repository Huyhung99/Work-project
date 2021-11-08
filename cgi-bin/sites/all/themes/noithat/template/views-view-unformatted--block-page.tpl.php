<?php
global $language;
$lang_name = $language->language;
?>
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
            <div class="txt-product">
              <h3><?= $row[0] ?></h3>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
        <?php
            $node = node_load(trim($row[4]));
            $path = check_plain(url('taxonomy/term/'.$node->field_loai_san_pham['und'][0]['tid'], array()))
        ?>
    </div>
    <a class="view-more" href="<?=$path?>"><?= t('View more') ?></a></div>
</div>
