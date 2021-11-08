<div class="nen-block">
  <div class="tab-lien-quan-font">
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
      <?php 	$arr = explode('{{}}', $row);  //0:image, 1: title, 2: created, 3: body= ?>
      <?php if($id==0):?>
      <div class="col-md-6">
        <div class="block-first-new sm-block block-dau">
          <div class="block-image-postdate">
            <?=$arr[3];?>
          </div>
          <div class="bottom-block-img-postdate white-bg">
            <h2 class="title-fours-new-front"><?=$arr[1]?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="row">
          <?endif;?>
          <?php if($id!=0):?>
            <div class="col-md-4">
              <div class="block_side_1 mb-10"><?=$arr[0]?></div>
            </div>
            <div class="col-md-8">
              <div class="title-sbf">
                <h3 class="mb-15"><?=$arr[1]?></h3>
              </div>
              <p class="body-product-content"><?=$arr[4]?></p>
            </div>
          <?php endif;?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
