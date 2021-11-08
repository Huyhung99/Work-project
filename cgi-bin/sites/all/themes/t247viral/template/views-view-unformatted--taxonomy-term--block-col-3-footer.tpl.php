<?php
?>
<div class="widget-title hidden-xs">
    <h3>Hình ảnh</h3>
</div>
<div class="widget instagram-widget hidden-xs">
    <ul>
            <?php foreach ($rows as $id => $row): ?>
              <li><?php   print $row; ?></li>
            <?php endforeach; ?>
    </ul>
</div>