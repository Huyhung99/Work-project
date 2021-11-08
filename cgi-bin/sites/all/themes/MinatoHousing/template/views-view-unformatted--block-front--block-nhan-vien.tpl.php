<div class="property-news-area pt-30 pb-30">
  <div class="container">
    <div class="section-title">
      <h2
        class="title text-uppercase text-center"><?php print $view->get_title() ?></h2>
      <p
        class="text-center"><?php print node_load(239)->field_mo_ta_slider['und'][0]['value'] ?></p>
    </div>
        <div class="slider_nhan_vien text-center">
          <?php foreach ($rows as $row): ?>
          <div class="item">
              <div class="text-left">
                <?php print $row ?>
              </div>
          </div>
          <?php endforeach; ?>
        </div>
  </div>
</div>
