<section class="product-area featured-product-area pt-20 pb-0" data-aos="fade-up" data-aos-duration="1000">
  <div class="row">
    <div class="col-md-8 col-lg-6 m-auto">
      <div class="section-title text-center">
        <h2 class="title">SẢN PHẨM NỔI BẬT</h2>
        <p>Sản phẩm của chúng tôi luôn đáp ứng được yêu cầu về chất lượng, tự tin đem lại sự hài lòng cho khách hàng.</p>
      </div>
    </div>
  </div>
  <div class="row">
    <?php foreach ($rows as $id => $row):?>
      <div class="col-6 col-sm-6 col-lg-4 col-xl-3">
        <?php print $row;?>
      </div>
    <?php endforeach;?>
  </div>
</section>
