<?php
  global $language;
  $vi_en = $language->language;
?>
<div class="container">
  <div class="section-title-left-part mrt-30 mrb-30">
    <h2 class="title"><?php if($vi_en=='vi') { print 'ẢNH HOẠT ĐỘNG'; } else { print 'ACTIVITIES';} ?></h2>
  </div>
  <div class="row">
    <?php foreach ($rows as $row):?>
      <div class="col-md-3 col-6 mrb-15">
        <?php print $row?>
      </div>
    <?php endforeach;?>
  </div>
</div>
