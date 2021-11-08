<div class="bg-khac-wrapper">
    <h3 class="sidebar-title"><span><?php print t($view->get_title()) ?></span></h3>
    <?php foreach ($rows as $id => $row): ?>
        <div<?php if ($classes_array[$id]): ?> class="<?php print $classes_array[$id]; ?>"<?php endif; ?>>
            <?php print $row; ?>
        </div>
    <?php endforeach; ?>
</div>
