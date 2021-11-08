<section class="product-area featured-product-area pt-20 pb-0" data-aos="fade-up" data-aos-duration="1000">
  <div class="row">
    <?php foreach ($rows as $id => $row): ?>
      <div class="col-6 col-sm-6 col-lg-4 col-xl-3">
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>
