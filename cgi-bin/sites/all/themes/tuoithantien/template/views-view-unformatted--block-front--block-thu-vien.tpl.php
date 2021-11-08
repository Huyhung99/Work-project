<?php $arrColor = [
  'blue', 'green', 'red', 'green2', 'blue', 'orange'
] ?>
<div class="display-none-mb pc-hd">
  <?php $tenNhom = ''; $index = 0; ?>
  <?php foreach ($rows as $id => $row): ?>
    <?php $arr = explode('{{}}', $row); ?>
    <?php if($arr[1] != $tenNhom){
      $tenNhom = $arr[1];
      if($index != 0)
        echo '</div>';
      echo '<div class="row"><div class="col-md-12"><h2 class="text-left title-group-library mt-20 mb-20">'.$tenNhom.'</h2></div>';
    } ?>
    <div class="col-md-3">
      <?=$arr[0]?>
    </div>
    <?php $index++; ?>
  <?php endforeach; ?>
  <?php if($index > 0) echo '</div>'; ?>
</div>
<div class="display-none-pc mb-hd">
  <?php $tenNhom = ''; $index = 0; ?>

  <?php foreach ($rows as $id => $row): ?>
    <?php $arr = explode('{{}}', $row); ?>
    <?php if($arr[1] != $tenNhom){
      $tenNhom = $arr[1];
      if($index != 0)
        echo '</div>';
      echo '<div class="row"><div class="col-md-12"><h2 class="text-left title-group-library mt-20 mb-20">'.$tenNhom.'</h2></div><div class="owl-carousel owl-theme services-holder">';
    } ?>

    <div class="sbox-5">
      <?php $arr_date = explode('/', $arr[2]); ?>
      <?php print str_replace('thuvien-post-date-mobile">','thuvien-post-date-mobile">'.getDateFromStr($arr_date),$arr[0])?>
    </div>
    <?php $index++; ?>
  <?php endforeach; ?>
  <?php if($index > 0) echo '</div> </div>'; ?>
  <div class="row">
    <?php $linkdan='/blog/'.createCode($tenNhom);?>
    <div class="col-4"></div>
    <div class="col-4"><p class="phan_trang_so_hoc_he text-center"><a
          href="<?= $linkdan ?>">1</a><a href="<?= $linkdan ?>">105</a>
      </p></div>
    <div class="col-4 ">
      <div class="bg-white view-all">
        <a class="link-blog-thu-vien p10-30" href="<?= $linkdan ?>">Xem tất
          cả</a>
      </div>
    </div>
  </div>
  <div class="phan-doan"></div>
</div>
