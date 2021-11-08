<?php
  global $language;
  $vi_en = $language->language;
?>
<?php foreach ($rows as $row):?>
<?php $arr=explode('{{}}',$row)?>
  <?php if($vi_en=='vi'):?>
    <?php print $arr[0]?>
  <?php else:?>
    <?php print $arr[1]?>
  <?php endif;?>
<?php endforeach;?>
