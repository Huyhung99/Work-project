<!-- Product Area Start -->
<div class="container">
  <div class="product-area">
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-md-3 col-6">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
