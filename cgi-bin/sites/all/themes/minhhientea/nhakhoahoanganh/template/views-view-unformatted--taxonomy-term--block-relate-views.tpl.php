<?php
?>

<div class="widget">
    <h4 class="widget-title text-uppercase">Tin liên quan</h4>
    <div class="latest-posts">
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
    </div>
</div>
