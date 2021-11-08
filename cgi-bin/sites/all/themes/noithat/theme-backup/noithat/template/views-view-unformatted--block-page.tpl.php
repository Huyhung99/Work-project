<div class="block-category ani-item">
  <div class="wrap-content-large">
    <div class="category-name"><h2><?= t($view->get_title()) ?></h2></div>
    <div class="list-product">
      <?php foreach ($rows as $row): ?>
        <?php $row = explode('{{}}', $row); ?>
        <div class="item-product  cate-265 style-3 color-1 brand-9">
          <a href="<?= $row[2] ?>" class="link-load">
            <div class="pic-product">
              <div class="highlight">
                <div class="new-icon"></div>
              </div>
              <div class="pic-img"><img
                  src="<?= $row[1] ?>"
                  alt="<?= $row[0] ?>"></div>
            </div>
            <div class="txt-product">
              <h3><?= $row[0] ?></h3>
              <h4><?php isset($row[3]) ? print $row[3] : print 'Code: PGORD300' ?></h4>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <a class="view-more" href="#"><?= t('View more') ?></a></div>
</div>
