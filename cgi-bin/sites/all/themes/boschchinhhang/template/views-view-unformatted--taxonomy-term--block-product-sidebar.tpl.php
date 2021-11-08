<div class="widget">
    <h3 class="widget-title"><?php print $view->get_title()?></h3>
    <div class="widget-blog-post">
        <ul>
            <?php foreach ($rows as $row):?>
                <?php print $row?>
            <?php endforeach;?>
        </ul>
    </div>
</div>