<?php
?>
<div class="widget bg-white  recent-posts-entry">
    <h4 class="widget-title">TIN LIÊN QUAN</h4>
    <div class="section-content">
        <div class="wt-tabs tabs-default border">
            <div class="tab-content">
                <div id="web-design-1">
                    <div class="widget-post-bx">
                        <?php foreach ($rows as $id => $row): ?>
                                <?php print $row; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

