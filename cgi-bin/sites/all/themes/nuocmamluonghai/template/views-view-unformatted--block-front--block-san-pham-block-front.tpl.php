<div class="shop-page-area">
  <div class="container">
    <h2 class="title-bar50">Sản phẩm</h2>
    <div class="row">
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="gried-view">
          <?php foreach ($rows as $id => $row): ?>
            <div class="col-lg-3 col-md-3 col-xs-6">
              <?php print $row; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
