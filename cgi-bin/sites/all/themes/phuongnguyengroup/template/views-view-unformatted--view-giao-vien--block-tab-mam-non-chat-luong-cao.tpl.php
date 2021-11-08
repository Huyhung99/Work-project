<?php
?>
<div id="mam-non-chat-luong-cao">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <!--            [title]{{}}[field_image]{{}}[field_image_1]{{}}[field_anh_lien_quan]{{}}[[path]]{{}}[body]-->
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

      <li class="nav-item"><a aria-controls="<?=createCode($title)?>-tab" aria-selected="true" class="nav-link rounded-pill <?=$active?>" data-toggle="pill" href="#<?=createCode($title)?>-tab" id="<?=createCode($title)?>" role="tab"><?=$title?></a></li>
      <?php $i++;
    endforeach;?>
  </ul>
</div>
