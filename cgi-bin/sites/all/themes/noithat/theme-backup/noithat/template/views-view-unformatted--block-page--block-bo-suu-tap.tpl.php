<?php $arr = [];
$dem = 0;
?>
<?php foreach ($rows as $id => $row): ?>
  <?php
  $arr[$dem][$id] = $row;
  if (count($arr[$dem]) >= 2) {
    $dem++;
  }
  ?>
<?php endforeach; ?>
<?php foreach ($arr as $arr1): ?>
  <div class="wrap-list">
    <?php foreach ($arr1 as $arr2): ?>
    <?php $arr2=explode('{{}}',$arr2);?>
      <div class="item-catalogue white"><a href="<?php print strip_tags($arr2[2])?>" class="link-load">
          <div class="pic-catalogue ani-item">
            <div class="pic-img"><img src="<?php print strip_tags($arr2[1])?>"
                                      alt="<?php print strip_tags($arr2[0])?>">
            </div>
          </div>
          <div class="txt-catalogue ani-item"><h3><?php print strip_tags($arr2[0])?></h3></div>
        </a></div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>
