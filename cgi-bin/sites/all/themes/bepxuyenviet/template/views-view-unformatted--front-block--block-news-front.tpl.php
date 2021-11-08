<!--[title]{{}}[field_image]{{}}[path]{{}}[body]-->
<div class="blog-area pb-40 dotted-style3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2>TIN TỨC</h2>
          <p class="text-center">Các tin tức sẽ cung cấp thông tin bổ ích cho khách hàng</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="blog-carousel-active">
        <?php foreach ($rows as $id => $row):?>
          <?php $exp=explode('{{}}',$row)?>
          <div class="col-lg-12">
            <div class="single-blog">
              <div class="blog-img">
                <a href="<?=$exp[2]?>"><?=$exp[1]?></a>
              </div>
              <div class="blog-info">
                <a href="<?=$exp[2]?>"><h2><?=$exp[0]?></h2></a>
                <p><?=$exp[3]?></p>
                <a href="<?=$exp[2]?>">Xem thêm <span class="lnr lnr-arrow-right"></span></a>
              </div>
            </div>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</div>
