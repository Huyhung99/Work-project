<h3 class="widget-title"><?php print $view->get_title();?></h3>
<div class="widget-blog-post">
  <ul>
    <?php foreach ($rows as $id => $row):?>
    <li>
      <?php print $row;?>
    </li>
    <?php endforeach;?>
  </ul>
</div>
