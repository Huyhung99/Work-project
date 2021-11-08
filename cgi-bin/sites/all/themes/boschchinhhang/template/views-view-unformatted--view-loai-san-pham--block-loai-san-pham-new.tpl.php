<section class="product-area latest-product-area" data-aos="fade-up" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <?php foreach ($rows as $id => $row):?>
      <div class="col-md-6 col-xl-3 col-xxl-3 col-6">
        <?php print $row?>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>
