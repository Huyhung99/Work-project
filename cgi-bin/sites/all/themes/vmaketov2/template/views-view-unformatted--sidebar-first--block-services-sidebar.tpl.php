<div class="widget widget_categories">
    <h3 class="widget-title"><?=$view->get_title()?></h3>
    <ul class="categories-list">
        <?php foreach ($rows as $row):?>
            <li><?=$row?></li>
        <?php endforeach;?>
    </ul>
</div>