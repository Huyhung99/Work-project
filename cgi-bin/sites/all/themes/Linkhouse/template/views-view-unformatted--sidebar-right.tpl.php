<div>
  <h3 class="widget_title">
    <span class="title_shape_left"></span>
    <?= $view->get_title();?>
  </h3>
  <?php foreach ($rows as $row) : ?>
    <?= $row;?>
  <?php endforeach;?>
</div>
