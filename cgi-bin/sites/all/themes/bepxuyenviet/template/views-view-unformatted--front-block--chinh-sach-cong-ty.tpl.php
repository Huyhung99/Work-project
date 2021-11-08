<hr>
<h3 class="title_footer mt-30"><?php print t($view->get_title());?></h3>
<ol class="chinh_sach">
  <?php foreach ($rows as $id => $row): ?>
    <li>
      <?php print $row; ?>
    </li>
  <?php endforeach; ?>
</ol>
