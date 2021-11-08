<section class="projects-section-five">
  <div class="line-shape">
    <span class="line-one"></span>
    <span class="line-two"></span>
    <span class="line-three"></span>
    <span class="line-four"></span>
  </div>
  <div class="auto-container">
    <div class="sec-title style-two text-center">
      <h2>Loại sản phẩm</h2>
    </div>
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-3 col-6 block_danh_sach_sp">
          <div class="inner-box">
            <?php print $row; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
