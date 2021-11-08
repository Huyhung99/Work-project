<!--[title]{{}}[field_image]-->
<?php foreach ($rows as $row):?>
  <?php $row=explode('{{}}',$row);?>
  <div class="album-thumb">
    <div class="pic-img"><img src="<?=$row[1]?>" alt="<?=$row[0]?>"></div>
    <a class="view-album" href=""></a>
    <div class="title-pic"><h3><?=$row[0]?></h3></div>
  </div>
<?php endforeach;?>
