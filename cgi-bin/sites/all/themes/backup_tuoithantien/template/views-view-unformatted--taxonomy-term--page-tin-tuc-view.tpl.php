<input type="hidden" id="type-path" value="tin-tuc">
<input type="hidden" id="type-hover" value="bg-pink">
<?php $arrColor = [
  'blue', 'green', 'red', 'green2', 'blue', 'orange'
] ?>
<div class="row">
  <?php foreach ($rows as $id => $row): ?>
    <div class="col-md-4">
      <?php 	$arr = explode('{{}}', $row);  //0:image, 1: title, 2: created, 3: body= ?>
      <div class="bg-gray bbright-rad-10 bbleft-rad-10 mb-30">
        <div class="block-image-postdate">
          <?=$arr[0];?>
          <div class="block-created bg-<?=$arrColor[$id] ?>">
            <?php $arr_date = explode('/', $arr[2]); ?>
            <?=getDateFromStr($arr_date);?>
          </div>
        </div>
        <div class="bottom-block-img-postdate gray-bg pd-20 pt-0 ">
          <h2 class="title-first-new-front-sm mb-20"><?=$arr[1]?></h2>
          <p><?=$arr[3]?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
