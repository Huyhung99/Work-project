<?php
?>
<!-- RECENT POSTS -->
<div class="widget bg-white  recent-posts-entry">
    <h4 class="widget-title  text-uppercase">TIN LIÊN QUAN</h4>
    <div class="section-content">
        <div class="widget-post-bx">
            <?php foreach ($rows as $id => $row): ?>
                <?php print $row; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="wt-divider bg-black"><i class="icon-dot c-square"></i></div>

