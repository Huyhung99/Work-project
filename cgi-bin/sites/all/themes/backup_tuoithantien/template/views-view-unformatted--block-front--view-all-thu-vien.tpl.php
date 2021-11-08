<!--[field_image]{{}}[title]{{}}[field_chuyen_muc]{{}}[created]{{}}[field_anh_lien_quan]-->
<div class="blog-lop-hoc-chi-ti">
  <?php $tenNhom = ''; $index = 0; ?>
  <?php foreach ($rows as $id => $row): ?>
    <?php $arr = explode('{{}}', $row); ?>
    <?php if($arr[2] != $tenNhom){
      $tenNhom = $arr[2];
      if($index != 0)
        echo '</div>';
      echo '<div class="row"><div class="col-md-12"><h2 class="text-left title-group-library mt-20 mb-20">'.$tenNhom.'</h2>';
    } ?>
    <div class="image-lophoc">
      <div class="lophoc-inline lophoc-left"><?= $arr[0]?>
        <div class="mb-hd">
          <div class="block-created bg-blue">
            <?php $arr_date = explode('/', $arr[3]); ?>
            <?php print getDateFromStr($arr_date)?>
          </div>
        </div>
      </div>
      <div class="lophoc-inline lophoc-right"><?php if($arr[4]!=''):?>
        <?php $arr[4]=explode(',',$arr[4]);?>
        <?php for($i=0;$i<6;$i++):?>
          <div class="img-lienquan">
            <?=$arr[4][$i]?>
          </div>
        <?php endfor;?>
        <?php endif;?>
      </div>
      <div class="title-lophoc">
        <h2 class="title-first-new-front-sm mb-20"><?= $arr[1]?></h2>
      </div>
    </div>
    <?php $index++; ?>
  <?php endforeach; ?>
  <?php if($index > 0) echo '</div></div>'; ?>
</div>
