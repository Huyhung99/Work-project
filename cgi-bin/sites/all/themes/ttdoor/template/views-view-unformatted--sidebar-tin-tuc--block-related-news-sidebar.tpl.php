<?php
?>
<div class="sidebar__item">
    <h3 class="sidebar__item--title">
        Tin liên quan
    </h3>
    <ul class="media-list">
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
    </ul>
</div>
