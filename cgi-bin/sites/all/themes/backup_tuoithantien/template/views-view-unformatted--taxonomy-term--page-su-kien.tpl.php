<input type="hidden" id="type-path" value="su-kien">
<input type="hidden" id="type-hover" value="bg-blue2">
<?php $arrColor = [
  'blue', 'green', 'red', 'green2', 'blue', 'orange'
] ?>
<?php foreach ($rows as $id => $row): ?>
  <?php $arr = explode('{{}}',  $row);  //[field_image]{{}}[title]{{}}[created]{{}}[body]{{}}[field_image_1]?>
  <?php $arr_date = explode('/', $arr[2]); ?>
  <?php if($id == 0 || $id == 5): ?>
    <?php if($id == 0) echo '<div class="row">' ?>
    <div class="col-md-6">
      <div class="bg-gray bbright-rad-10 bbleft-rad-10 mb-30">
      <div class="block-image-postdate">
        <?=$arr[0];?>
        <div class="block-created bg-<?=$arrColor[$id] ?>">
          <?=getDateFromStr($arr_date);?>
        </div>
      </div>
      <div class="bottom-block-img-postdate gray-bg pd-20 pt-0 ">
        <h2 class="title-first-new-front-sm mb-20"><?=$arr[1]?></h2>
        <p><?=$arr[3]?></p>
      </div>
    </div>
    </div>
    <?php if($id == 5) echo '</div>'; ?>
  <?php else: ?>
    <?php if($id == 1 || $id == 3) echo '<div class="col-md-6">' ?>
      <div class="bg-gray mb-20 border-radius-top-right-10 border-radius-bottom-right-10">
        <div class="row">
          <div class="col-md-6 block-right-content">
            <?=$arr[4];?>
            <div class="block-created bg-<?=$arrColor[$id] ?>">
              <?=getDateFromStr($arr_date);?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="inner-content-right-events">
              <h2 class="title-first-new-front-sm mb-20"><?=$arr[1]?></h2>
              <p><?=$arr[3]?></p>
            </div>
          </div>
        </div>
      </div>
    <?php if($id == 2 || $id == 4) echo '</div>'; ?>
  <?php endif; ?>
<?php endforeach; ?>
<?php if($id == 1 || $id == 3) echo '</div>' ?>
<?php if($id < 5) echo '</div>'; ?>
