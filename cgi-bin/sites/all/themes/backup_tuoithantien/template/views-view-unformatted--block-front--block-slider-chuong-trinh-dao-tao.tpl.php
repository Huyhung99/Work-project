<section class="bg-chuong-trinh-dao-tao services-section division">
  <div class="container">
    <div class="bg-white content-chuong-trinh-dao-tao">
      <h2 class="text-center"><?php print t('Chương trình đào tạo') ?></h2>
      <!-- SERVICES CONTENT -->
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme chuong-trinh-dao-tao-slider">
            <!-- SERVICE BOX #1 -->
            <?php foreach ($rows as $id => $row): ?>
              <div class="sbox-3 icon-sm bg-ccdt-<?=$id?>">
                <?php print $row; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>	<!-- END SERVICES CONTENT -->
    </div>
  </div>	   <!-- End container -->
</section>	 <!-- END SERVICES-3 -->
