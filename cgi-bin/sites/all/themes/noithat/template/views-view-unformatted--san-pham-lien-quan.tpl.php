<div class="slide-other slide-three white">
<?php foreach ($rows as $row):?>
<?php $row=explode('{{}}',$row);?>
  <div class="item-product hafro color-cobalt modern bathroom">
    <a
      href="<?=$row[1]?>"
      class="link-load">
      <div class="highlight">
        <div class="new-icon"></div>
      </div>
      <div class="pic-product">
        <div class="pic-img">
          <img src="<?=$row[2]?>" alt="<?=$row[2]?>">
        </div>
      </div>
      <div class="txt-product"><h3 class="title_white"><?php print $row[0]?></h3><h4></h4>
      </div>
    </a>
  </div>
<?php endforeach;?>
</div>
