<h3><?php print $view->get_title();?></h3>
<ul class="quick-links">
  <?php foreach ($rows as $id => $row): ?>
    <li>

      <?=$row;?>
    </li>
  <?php endforeach; ?>
</ul>
