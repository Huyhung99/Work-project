<div class="latest-courses">
  <h3 class="title"><?= $view->get_title();?></h3>
  <?php foreach ($rows as $row):?>
    <div class="post-item">
      <?php print $row?>
    </div>
  <?php endforeach;?>
</div>
