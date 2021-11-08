<div class="widget_lastest_entries khoa-hoc-footer">
    <div class="widget-title">
        <h2 class="text-white"><?= $view->get_title() ?></h2>
    </div>

    <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
        <li class="text-white <?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
    <?php print $list_type_suffix; ?>
    <?php print $wrapper_suffix; ?>
</div>