<?php
?>
<div class="widget recent-posts-entry-date">
    <h3 class="widget-title"><?php print  t('Recently News')?></h3>
    <div class="widget-post-bx">
        <?php foreach ($rows as $id => $row): ?>
                <?php print $row; ?>
        <?php endforeach; ?>
    </div>
</div>

