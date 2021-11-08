<?php
/**
 ** hungd
 ** 6/29/2020 3:35 PM
 ** views-view-unformatted--block-front--block-tin-tuc-footer.tpl.php
 ** drupal-7.65
 */
?>
<div class="footer-links">
  <h6 class="text-custom-white title-caption-footer">Tin nổi bật</h6>
  <?php foreach ($rows as $id => $row): ?>
    <article class="side-post pb-xl-10 mb-xl-10">
      <?php print $row; ?>
    </article>
  <?php endforeach; ?>
</div>
