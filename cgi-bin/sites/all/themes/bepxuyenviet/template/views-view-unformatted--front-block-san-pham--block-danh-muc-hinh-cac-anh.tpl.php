<!--[title]{{}}[path]{{}}[field_image]{{}}[field_danh_muc_anh]{{}}[path_1]-->
<div class="new-product-area new-product-area-3 pt-20 pb-20 mt-20 mb-20">
  <div class="container-fluid">
    <div class="new-product-home-2-active">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-12">
          <?php $row=explode('{{}}',$row); ?>
          <div class="single-new-product">
            <div class="product-img">
              <?php print $row[2];?>
              <div class="new-product-action">
                <p><?php print $row[0];?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
