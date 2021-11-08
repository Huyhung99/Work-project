<?php
?>

<div  class="portfolio-wrap wt-blog-grid-3">
    <!-- COLUMNS 1 -->
        <?php foreach ($rows as $id => $row): ?>
            <div class="post masonry-item col-md-3 col-sm-6 col-xs-6 m-b30">
            <?php print $row; ?>
            </div>
        <?php endforeach; ?>
    <!-- COLUMNS 2 -->
</div>

