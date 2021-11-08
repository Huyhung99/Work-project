<div class="container">
  <div class="block_danh_sach_giao_vien">
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme reviews-holder">
          <?php foreach ($rows as $id => $row): ?>
            <div class="review-2">
              <div class="review-txt text-center">
                <?php print $row; ?>
              </div>
            </div>	<!--END  TESTIMONIAL #1 -->
          <?php endforeach; ?>
          <!-- TESTIMONIAL #1 -->
        </div>
      </div>
    </div>
  </div>

</div>
