<?php
/**
 ** hungd
 ** 6/25/2020 4:00 PM
 ** views-view-unformatted--taxonomy-term--page.tpl.php
 ** drupal-7.65
 */
?>
<div class="row">
  <?php foreach ($rows as $id => $row): ?>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>
