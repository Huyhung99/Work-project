<div class="row">
  <?php
  $i = 1;
  foreach ($rows as $id => $row): ?>

      <?php
      if ($i%2==0){
          $arr =  str_replace('row','row flex-row-reverse-mb',$row);
      }else{
          $arr = $row;
      }
      ?>
      <div class="col-sm-6">
          <?php print str_replace('Chương trình giáo dục thể chất', "Chương trình<br/> giáo dục thể chất",
          str_replace('Hoạt động', 'Hoạt động <br/>',
          str_replace('Môi trường học tập', 'Môi trường học tập <br/>',
          str_replace('Chương trình Tiếng Anh', 'Chương trình<br/> Tiếng Anh',
              $arr)))); ?>
      </div>


  <?php $i++?>
  <?php endforeach; ?>
</div>

