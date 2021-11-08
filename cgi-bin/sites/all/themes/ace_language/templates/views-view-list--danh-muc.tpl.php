<div class="widget_product_categories">
    <div class="widget-title">
        <h2><?= $view->get_title() ?></h2>
    </div>
    <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
        <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
    <?php print $list_type_suffix; ?>
    <?php print $wrapper_suffix; ?>
</div>