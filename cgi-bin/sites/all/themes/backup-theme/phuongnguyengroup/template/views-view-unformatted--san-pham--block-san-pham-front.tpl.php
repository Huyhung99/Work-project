<div class="product-front"><h2><span>Sản phẩm</span></h2></div>
<div class="row">
  <?php foreach ($rows as $id => $row): ?>
    <div class="col-md-6">
      <?php print str_replace('<li>', '<li><i class="fas fa-angle-right"></i>', $row); ?>
    </div>
  <?php endforeach; ?>
</div>
