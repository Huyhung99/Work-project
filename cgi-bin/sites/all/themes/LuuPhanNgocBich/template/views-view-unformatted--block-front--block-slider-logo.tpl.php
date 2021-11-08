<section id="services-5" class="bg-lightgrey services-section division">
  <div class="container pt-30">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 section-title">
        <h3 class="font-30 ">Đối tác</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme services-holder">
          <?php if(count($rows)<=4):?>
            <?php foreach ($rows as $id => $row): ?>
              <div class="sbox-5">
                <?php print $row; ?>
              </div>
            <?php endforeach; ?>
            <?php for ($i=0;$i<(5-count($rows));$i++):?>
              <div class="sbox-5">
                <?php print $row; ?>
              </div>
            <?php endfor;?>
          <?php else:?>
            <?php foreach ($rows as $id => $row): ?>
              <div class="sbox-5">
                <?php print $row; ?>
              </div>
            <?php endforeach; ?>
          <?php endif;?>
      </div>
    </div>
  </div>
</section>
