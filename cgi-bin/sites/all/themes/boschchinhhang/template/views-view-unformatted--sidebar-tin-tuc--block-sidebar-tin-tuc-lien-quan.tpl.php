<h3 class="widget-title"><?php print $view->get_title();?></h3>
<div class="widget-blog-post">
  <ul>
    <?php foreach ($rows as $id => $row):?>
      <li class="pb-10">
        <?php print $row;?>
      </li>
    <?php endforeach;?>
  </ul>
</div>
