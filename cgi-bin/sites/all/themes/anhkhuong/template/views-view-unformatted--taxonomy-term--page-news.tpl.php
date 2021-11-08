<?php
?>
<div class="block">
    <div class="posts-view">
        <div class="posts-view__list posts-list posts-list--layout--list">
            <div class="posts-list__body">
                <?php foreach ($rows as $id => $row): ?>
                        <?php print $row; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

