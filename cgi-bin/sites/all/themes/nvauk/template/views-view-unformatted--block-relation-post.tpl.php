<?php
/**
 ** hungd
 ** 5/1/2020 9:20 AM
 ** views-view-unformatted--block-relation-content.tpl.php
 ** drupal-7.65
 */
?>
<!-- Latest News -->
<div class="sidebar-widget latest-news">
  <div class="sidebar-title"><h2><?php print t('Relate Posts') ?></h2></div>
  <div class="widget-content">
    <?php foreach ($rows as $id => $row): ?>
      <article class="post">
        <?php print $row; ?>
      </article>
    <?php endforeach; ?>
  </div>
</div>

