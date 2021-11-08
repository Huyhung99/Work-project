<!--[title]{{}}[body]{{}}[path]{{}}[field_icon_i]-->
<div class="services-area ptb-100">
  <div class="container">
    <div class="section-title">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2><?= $view->get_title();?></h2>
        </div>
        <div class="col-lg-6 text-end">
          <a href="<?= check_plain(url('taxonomy/term/8',array()))?>" class="default-btn">Xem thêm <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
    </div>
    <div class="services-slides owl-carousel owl-theme">
      <?php foreach ($rows as $id => $row): ?>
        <div class="single-services-card with-hover-color">
          <?php $arra=explode('{{}}',$row);?>
          <div class="icon">
            <i class="<?=trim(strip_tags($arra[3]));?>"></i>
          </div>
          <h3>
            <?=$arra[0]?>
          </h3>
          <p><?=strip_tags(trim($arra[1]));?></p>
          <a href="<?=$arra[2]?>" class="services-btn">Xem thêm <i class="ri-arrow-right-line"></i></a>
          <div class="hover-shape">
            <img src="/sites/default/files/shape-5-4.png" alt="Vmaketo" title="Vmaketo">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="services-shape-2" data-speed="0.08" data-revert="true">
    <img src="/sites/default/files/shape-3_0.png" alt="Vmaketo" title="Vmaketo">
  </div>
</div>
