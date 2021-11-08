<div class="footer4">
  <div class="block-header">
    <h5 class="footer-links__title">Sản phẩm</h5>
  </div>
  <div class="block-product-columns__column">
    <?php foreach ($rows

    as $id => $row): ?>
    <div class="block-product-columns__item">
      <div
        class=" product-card--hidden-actions product-card--layout--horizontal">
        <?php print $row; ?>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>


