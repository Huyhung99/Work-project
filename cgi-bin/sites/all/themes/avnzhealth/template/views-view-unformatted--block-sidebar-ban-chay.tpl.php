<div class="collection-leftsidebar sidebar clearfix">
    <div class="sidebar-block blogs-bestseller">
        <h3 class="sidebar-title"><span><?php print t($view->get_title()); ?></span></h3>
        <div class="sidebar-content bestseller-content">
            <div class="bestseller-item-inner">
                <?php foreach ($rows as $id => $row): ?>
                    <?php print $row; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
