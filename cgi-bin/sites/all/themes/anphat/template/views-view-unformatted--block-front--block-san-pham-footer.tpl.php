<?php
/**
 ** hungd
 ** 7/3/2020 3:33 PM
 ** views-view-unformatted--block-front--block-san-pham-footer.tpl.php
 ** drupal-7.65
 */
?>
  <h4 class="text-left text-uppercase">Sản phẩm nổi bật</h4>
<?php foreach ($rows as $id => $row): ?>
  <div class="media mg-bt10"  >
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
