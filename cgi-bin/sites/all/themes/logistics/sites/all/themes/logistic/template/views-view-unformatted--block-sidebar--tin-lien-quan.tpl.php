<div class="widget  recent-posts-entry">
    <h4><?=t('POST')?></h4>
    <div class="widget-post-bx">
        <?php foreach ($rows as $id => $row): ?>
            <div class="widget-post clearfix">
                <?php print $row; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="mt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
