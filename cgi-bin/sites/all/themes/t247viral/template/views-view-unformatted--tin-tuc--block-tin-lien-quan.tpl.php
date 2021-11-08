<?php
?>
<div class="widget recent-post-widget">
    <h3><i class="ti-save-alt icon"></i>Tin liên quan</h3>
    <div class="posts">
        <div class=""></div>
        <?php foreach ($rows as $id => $row): ?>
            <div class="post"><?php print $row; ?></div>
        <?php endforeach; ?>
    </div>
</div>
<div class="img-holder">
    [field_image]
</div>
<div class="details page-detail">
    <h4><a href="[path]">[title]</a></h4>
    <span class="date"><i class="ti-timer"></i>[created]</span>
</div>