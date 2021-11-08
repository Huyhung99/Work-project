<?php
?>
    <div class="widget recent-posts-entry">
        <h4 class="widget-title  text-uppercase text-green-dark">TIN GẦN ĐÂY</h4>
        <div class="section-content">
            <div class="widget-post-bx">
                <?php foreach ($rows as $id => $row): ?>
                        <?php print $row; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
