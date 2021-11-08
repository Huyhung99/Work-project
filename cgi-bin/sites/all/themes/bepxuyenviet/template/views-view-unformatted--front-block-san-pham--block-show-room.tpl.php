<!--[title]{{}}[path]{{}}[field_image]{{}}[field_danh_muc_anh]{{}}[path_1]-->
<div class="show_room">
  <div class="section-title text-center pt-20 mt-20">
    <h2><?php print $view->get_title();?></h2>
  </div>
  <div class="new-product-area new-product-area-3 pb-20">
    <div class="container">
      <div class="new-product-home-2-active">
        <?php foreach ($rows as $id => $row): ?>
          <div class="col-lg-12">
            <?php $row=explode('{{}}',$row); ?>
            <div class="single-new-product">
              <div class="product-img">
                <?php print $row[2];?>
                <h3 class="title_show_room"><?php print $row[0];?></h3>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
