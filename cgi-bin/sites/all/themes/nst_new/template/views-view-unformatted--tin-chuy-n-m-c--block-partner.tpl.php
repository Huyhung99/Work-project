<?php
global $language;
$vi_en = $language->language;
$id_dem=0;
$arr=array();
$so_luong=0;
?>
<?php foreach ($rows as $id => $row):?>
  <?php
    if($id%2==0 && $id!=0)
    {
      $id_dem++;
    }
    if($so_luong==2)
    {
      $so_luong=0;
    }
    $arr[$id_dem][$so_luong]=$row;
    $so_luong++;
  ?>
<?php endforeach;?>
<div class="container">
  <div class="section-title-left-part mrt-30 mrb-30">
    <h2 class="title"><?php if($vi_en=='vi') { print 'ĐỐI TÁC'; } else { print 'PARTNER';} ?></h2>
  </div>
  <div class="row">
    <?php foreach ($arr as $arr_1):?>
      <div class="col-md-3 col-6 mrb-15">
        <?php if(count($arr_1)==2):?>
          <?php foreach ($arr_1 as $id_edit => $arr_2):?>
          <?php if($id_edit==0):?>
            <div class="row">
              <div class="col-md-6">
                <?php print $arr_2; ?>
              </div>
          <?php else: ?>
              <div class="col-md-6">
                <?php print $arr_2; ?>
              </div>
            </div>
          <?php endif;?>
        <?php endforeach;?>
        <?php else:?>
          <div class="row">
            <div class="col-md-6">
              <?php print $arr_1[0]; ?>
            </div>
          </div>
        <?php endif;?>
      </div>
    <?php endforeach;?>
  </div>
</div>
