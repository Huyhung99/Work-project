<?php
?>
<div class="left-blog-page">
    <!-- recent start -->
    <div class="left-blog">
        <h4>TIN LIÊN QUAN</h4>
        <div class="recent-post">
            <?php foreach ($rows as $id => $row): ?>
                    <?php print $row; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- recent end -->
</div>

