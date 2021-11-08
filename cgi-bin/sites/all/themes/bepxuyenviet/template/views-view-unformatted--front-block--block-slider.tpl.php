<!--[field_image]{}[field_headline]{}[field_link]{}[field_so_lien_he]{}[title_field]-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <?php $chaydem=0;?>
  <?php foreach ($rows as $id => $row): ?>
  <?php $chaydem++;?>
  <?php endforeach; ?>
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php foreach ($rows as $id => $row): ?>
      <?php $arr = explode('{}',$row); ?>
      <li data-target="#demo" data-slide-to="<?=$id?>" class="<?php $id==0 ? print 'active' : '';?>"></li>
    <?php endforeach; ?>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php foreach ($rows as $id => $row): ?>
      <?php $arr = explode('{}',$row); ?>
      <div class="carousel-item <?php $id==0 ? print 'active' : '';?>">
        <a href="<?=$arr[2];?>"><?=$arr[0];?></a>
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
