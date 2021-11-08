<div class="partner-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12">
        <div class="partner-content">
          <h3><?php print t('Đối tác - Khách hàng') ?></h3>
          <p>Ngoài thị trường và khách hàng trong nước, Khách hàng và Đối tác của chúng tôi cũng có mặt ở nhiều Quốc gia, trong đó có có các nước như Mỹ, Nhật Bản, Hàn Quốc, Nga, Lào, Singapore.</p>
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="partner-image-box">
          <div class="row">
            <?php foreach ($rows as $id => $row): ?>
              <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                <?php print $row; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
