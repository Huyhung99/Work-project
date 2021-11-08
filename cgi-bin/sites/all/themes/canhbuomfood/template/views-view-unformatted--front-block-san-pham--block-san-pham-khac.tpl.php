<div class="product-area">
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <!-- Section Title Start -->
      <div class="section-title">
        <h3><?php print t($view->get_title())?></h3>
      </div>
      <!-- Section Title End -->
    </div>
  </div>
  <div class="row">
    <?php foreach ($rows as $id => $row): ?>
      <div class="col-md-3 col-6">
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
