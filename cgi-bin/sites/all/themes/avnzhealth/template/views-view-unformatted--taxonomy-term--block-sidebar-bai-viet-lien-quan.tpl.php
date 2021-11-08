<div class="sidebar-block blogs-recent">
    <h3 class="sidebar-title"><span><?= t($view->get_title());?></span></h3>
    <div class="sidebar-content recent-article">
        <div class="ra-item-inner">
            <?php foreach ($rows as $id => $row): ?>
                    <?php print $row; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
