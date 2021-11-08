<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php foreach ($rows as $id => $row): ?>
      <li data-target="#demo" data-slide-to="0" class="<?php $id==0 ? print 'active' : print '';?>"></li>
    <?php endforeach; ?>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php foreach ($rows as $id => $row): ?>
      <div class="carousel-item <?php $id==0 ? print 'active': print '';?>">
        <?php
        $arr = explode('{}',$row);
        ?>
        <?=$arr[0]; ?>
        <div class="hero-content-one">
          <div class="slider-content-text">
            <?php if($arr[3] != ''): ?>
              <h2><?=$arr[3]?></h2>
            <p class="thongtin-slider">
              <?php print $arr[1]?>
            </p>
            <?php endif; ?>
            <div class="slider-btn">
              <a href="<?=$arr[2]; ?>" title="<?=t('Xem chi tiết'); ?>">
                <?=t('Xem chi tiết'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
