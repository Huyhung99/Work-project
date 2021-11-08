<!--[field_caption]{{}}[field_image]{{}}-->
<div class="block-slideshow block-slideshow--layout--with-departments block">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 d-none d-lg-block"></div>
      <div class="col-12 col-lg-9">
        <div class="block-slideshow__body">
          <div class="owl-carousel">
            <?php foreach ($rows as $id => $row): ?>
              <?php $arr = explode('{{}}', $row) ; ?>
            <div class="block-slideshow__slide">
              <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('<?=$arr[1]?>')"></div>
              <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('<?=$arr[1]?>')"></div>
              <div class="block-slideshow__slide-content">
                <div class="block-slideshow__slide-title"><h3 class="title-slider"><?=$arr[2]?></h3></div>
                <div class="block-slideshow__slide-text"><p class="title-slider"><?=$arr[0]?></p></div>
                <div class="block-slideshow__slide-button">
                  <a href="tel:+840600730"><span class="btn btn-primary btn-lg">LIÊN HỆ</span></a>
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
