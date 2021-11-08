<!--[title]{{}}[field_image]{{}}[path]{{}}[body]-->
<div class="client-area pt-30 trang_toan_bo nen_dep_anh pb-30">
  <div class="container">
    <div class="background-new">
      <div class="section-title text-center">
        <h2 class="title"><?php print $view->get_title(); ?></h2>
      </div>
      <div class="client-review-img">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="client-slider-2 text-center">
              <?php foreach ($rows as $id => $row): ?>
                <?php $arr = explode('{{}}', $row) ?>
                <div class="item">
                  <div class="single-client-review pr-15">
                    <div class="thumb">
                      <?php print $arr[1] ?>
                    </div>
                    <div class="review-details">
                      <p><?php print $arr[3] ?></p>
                      <h4><?php print $arr[0] ?></h4>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
