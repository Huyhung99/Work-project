<?php
?>
<div class="widget dark">
    <h5 class="widget-title text-uppercase">Tin liên quan</h5>
    <div class="latest-posts">
        <?php foreach ($rows as $id => $row): ?>
                <?php print $row; ?>
        <?php endforeach; ?>
    </div>
</div>

