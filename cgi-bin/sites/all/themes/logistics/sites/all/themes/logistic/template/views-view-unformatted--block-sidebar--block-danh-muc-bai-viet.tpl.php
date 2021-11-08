<div class="widget  recent-posts-entry">
    <h3 class="text-uppercase">Tin liên quan</h3>
    <div class="widget-post-bx">
        <?php foreach ($rows as $id => $row): ?>
        <div class="widget-post clearfix">
                <?php print $row; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>