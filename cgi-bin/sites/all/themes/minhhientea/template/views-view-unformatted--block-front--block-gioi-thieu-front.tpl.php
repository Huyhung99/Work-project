<div class="about-page-area">
  <img src="http://minhhientea.com/sites/all/themes/rozaluta/assets/img/about1-bottom-back.png" class="img-responsive" alt="about1-bottom-back">
  <div class="container">
    <?php foreach ($rows as $id => $row): ?>
      <div class="row">
        <?php $arr = explode('{{}}', $row); ?>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="about-page-left">
            <h2>Lịch sử Trà Tân Cương - Thái Nguyên</h2>
            <?=trim($arr[0]);?>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="about-page-right">
            <div class="rc-carousel">
              <div class="about-page-img-holder">
                <?=trim($arr[1]);?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="about-page-bottom">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="about-page-bottom-box border-right wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
              <div class="media">
                <a href="#" class="pull-left">
                  <i class="flaticon-verified-protection"></i>
                </a>
                <div class="media-body">
                  <h3><a href="#">Chăm bón hữu cơ</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="about-page-bottom-box border-right wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
              <div class="media">
                <a href="#" class="pull-left">
                  <i class="flaticon-verified-protection"></i>
                </a>
                <div class="media-body">
                  <h3><a href="#">Không phẩm màu</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="about-page-bottom-box border-right wow zoomIn" data-wow-duration="2s" data-wow-delay="1s">
              <div class="media">
                <a href="#" class="pull-left">
                  <i class="flaticon-cup"></i>
                </a>
                <div class="media-body">
                  <h3><a href="#">Không hương liệu</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="about-page-bottom-box wow zoomIn" data-wow-duration="2s" data-wow-delay="1.5s">
              <div class="media">
                <a href="#" class="pull-left">
                  <i class="flaticon-coffee-cup"></i>
                </a>
                <div class="media-body">
                  <h3><a href="#">Không chất bảo quản</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>
