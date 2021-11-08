<div class="property-news-area pt-30 pb-30">
  <div class="container">
    <div class="section-title">
      <h2
        class="title text-uppercase text-center"><?php print $view->get_title() ?></h2>
    </div>
      <div class="row">
        <div class="slider_nhan_vien text-center">
          <?php foreach ($rows as $row): ?>
          <div class="item">
            <div class="col-md-12">
              <div class="text-left">
                <?php print $row ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
  </div>
</div>
