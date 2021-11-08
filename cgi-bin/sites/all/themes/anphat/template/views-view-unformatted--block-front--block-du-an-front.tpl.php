<?php
/**
 ** hungd
 ** 7/3/2020 2:39 PM
 ** views-view-unformatted--block-front--block-du-an-front.tpl.php
 ** drupal-7.65
 */
?>
<!-- Property Cities -->
<section id="best-property" class="best-property pb0 our-agents">
  <div class="container-fluid">
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-sm-3">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

