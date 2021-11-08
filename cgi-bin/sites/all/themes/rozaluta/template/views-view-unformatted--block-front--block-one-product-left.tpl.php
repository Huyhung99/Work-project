<?php foreach ($rows as $id => $row): ?>
  <?php $arr = explode('{{}}',$row)?>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6  menu-item ">
      <div class="food-menu4-box">
        <div class="input-icons">
          <?= $arr[1]?>
          <span><?= $arr[3]?></span>
          <div class="food-menu4-box-title">
            <h3><a href="<?=$arr[2]?>"><?=$arr[0]?></a></h3>
            <a href="<?=$arr[2]?>" class="icon-detail"><i class="fa fa-eye icon "></i></a>
            <i class="fa fa-cart-plus "></i><?=$arr[4]?>
          </div>
        </div>
      </div>
    </div>
<?php endforeach;?>
