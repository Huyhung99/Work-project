<!--[title]{{}}[path]{{}}[field_image]-->
<?php foreach ($rows as $row):?>
  <?php $row=explode('{{}}',$row);?>
  <div class="slide-item active">
    <div class="album-thumb">
      <div class="pic-img"><img src="<?=$row[2]?>" alt="<?=$row[0]?>"></div>
      <a class="view-album" href=""></a>
      <div class="title-pic"><h3><?=$row[0]?></h3></div>
    </div>
  </div>
<?php endforeach;?>
