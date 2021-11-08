<section class="our-team-sec ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title default text-center">
          <div class="section-top">
             <h2> <img src="/sites/default/files/cctv2.svg" alt="Camera An Việt" class="img-title"><?php print t('CAMERA/ CCTV GIÁM SÁT'); ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-3 col-xs-6 col-md-6 p-0">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
