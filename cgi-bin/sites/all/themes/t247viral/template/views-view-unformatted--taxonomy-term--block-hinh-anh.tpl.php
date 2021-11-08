<?php
?>
<div class="widget instagram-widget">
    <h3><i class="ti-instagram icon"></i>Hình ảnh</h3>
    <div class="row">
        <?php foreach ($rows as $id => $row): ?>
          <div class="col-md-4 image-sidebar"><?php print $row; ?></div>
        <?php endforeach; ?>
    </div>
</div>
