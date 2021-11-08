<?php
/**
 ** hungd
 ** 5/1/2020 6:44 AM
 ** views-view-list--category--block.tpl.php
 ** drupal-7.65
 */
?>

<div class="sidebar-widget blog-categories">
  <div class="sidebar-title"><h2>Categories</h2></div>
  <?php print $list_type_prefix; ?>
  <?php foreach ($rows as $id => $row): ?>
    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
  <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
</div>
