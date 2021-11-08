<section class="blog-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
        <div class="section-title default text-center">
          <div class="section-top">
            <h2><?php print t("Khách hàng thực tế") ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-4 col-md-6">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
