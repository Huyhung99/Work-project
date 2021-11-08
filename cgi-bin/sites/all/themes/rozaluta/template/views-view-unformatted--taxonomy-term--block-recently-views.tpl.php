<?php
?>
<div class="recent-recipes margin-bottom-sidebar">
    <h2 class="title-sidebar title-bar-sidebar text-uppercase">Tin liên quan</h2>
    <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
    <?php endforeach; ?>
</div>
