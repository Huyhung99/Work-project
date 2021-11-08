<?php
?>
<div class="widget">
    <h4 class="widget-title text-uppercase">Dịch vụ khác</h4>
    <div class="latest-posts">
        <?php foreach ($rows as $id => $row): ?>
                <?php print $row; ?>
        <?php endforeach; ?>
    </div>
</div>

