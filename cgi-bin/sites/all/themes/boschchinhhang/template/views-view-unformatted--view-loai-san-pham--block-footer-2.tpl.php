<h4 class="widget-title"><?php print $view->get_title(); ?></h4>
<nav class="widget-menu-wrap">
  <ul class="nav-menu nav">
    <?php foreach ($rows as $id => $row):?>
      <li>
        <?php print $row;?>
      </li>
    <?php endforeach;?>
  </ul>
</nav>
