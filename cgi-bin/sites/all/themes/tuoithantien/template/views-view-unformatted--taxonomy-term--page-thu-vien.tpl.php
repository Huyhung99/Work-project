<input type="hidden" id="type-path" value="thu-vien">
<input type="hidden" id="type-hover" value="bg-orange">

<?php $tenNhom = ''; $index = 0; ?>

<?php foreach ($rows as $id => $row): ?>
  <?php $arr = explode('{{}}', $row); ?>
  <?php if($arr[1] != $tenNhom){
    $tenNhom = $arr[1];
    if($index != 0)
      echo '</div>';
    echo '<div class="row"><div class="col-md-12"><h2 class="text-left title-group-library mb-20">'.$tenNhom.'</h2></div>';
  } ?>
  <div class="col-md-3">
    <?php print $arr[0];?>
  </div>
  <?php $index++; ?>
<?php endforeach; ?>
<?php if($index > 0) echo '</div>'; ?>
