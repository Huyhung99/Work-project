<div class="widget  recent-posts-entry">
    <h4><?=t('Popular news')?></h4>
    <div class="widget-post-bx">
        <?php foreach ($rows as $id => $row): ?>
            <div class="widget-post clearfix">
                <?php print $row; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
