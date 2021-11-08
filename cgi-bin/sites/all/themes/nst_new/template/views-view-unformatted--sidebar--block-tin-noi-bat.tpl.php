<?php
global $language;
$vi_en = $language->language;
?>
<h4 class="mrb-30 single-blog-widget-title"><?php if($vi_en=='vi') {print 'TIN NỔI BẬT';} else {print 'HOT NEWS';}?></h4>
<?php foreach ($rows as $row):?>
  <?php print $row?>
<?php endforeach;?>
