 <div class="tab-content" id="pills-tabContent">
   <?php $i = 0;
   foreach ($rows as $id => $row):?>
     <?php $arr = explode('{{}}',$row);
     $title = $arr[0];
     $field_image = $arr[1];
     $field_image_1 = $arr[2];
     $field_anh_lien_quan = $arr[3];
     $path = $arr[4];
     $body = $arr[5];
     ?>
     <?php if ($i==0){
       $active = 'active';
     }else{
       $active = '';
     }?>

     <?php $i++;
   endforeach;?>
    <?php
    $i = 0;
    foreach ($rows as $id => $row):?>
      <?php $arr = explode('{{}}',$row);
      $title = $arr[0];
      $field_image = $arr[1];
      $field_image_1 = $arr[2];
      $field_anh_lien_quan = $arr[3];
      $path = $arr[4];
      ?>
      <?php if ($i==0){
        $active = 'active show';
      }else{
        $active = '';
      }?>
      <div aria-labelledby="<?=createCode($title)?>" class="tab-pane fade <?=$active?>" id="<?=createCode($title)?>-tab" role="tabpanel">
        <div class="row">
          <div class="col-md-6">
            <div class="image-left"><?=$field_image?></div>
          </div>

          <div class="col-md-6">
            <div class="image-right">
              <?php $field_anh_lien_quan_arr = explode(',',$field_anh_lien_quan) ?>
              <?php foreach ($field_anh_lien_quan_arr as $item):?>
                <div class="item-img"><?=$item?></div>
              <?php endforeach;?>
            </div>
          </div>

          <div class="high-quality-preschool">
            <h3 class="title-preschool"><?=$title?></h3>
            <p><?=$body?></p>
          </div>
        </div>
      </div>
      <?php $i++;
    endforeach;?>
  </div>
