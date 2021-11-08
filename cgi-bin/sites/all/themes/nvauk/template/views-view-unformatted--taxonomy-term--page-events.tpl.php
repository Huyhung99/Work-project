<?php
/**
 ** hungd
 ** 5/1/2020 12:55 PM
 ** views-view-unformatted--taxonomy-term--page-events.tpl.php
 ** drupal-7.65
 */
?>
<!-- News Section -->
<div class="auto-container">
  <div class="row">
    <!-- News Block -->
    <?php foreach ($rows as $id => $row): ?>
      <div class="news-block col-md-6 col-sm-12">
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>

