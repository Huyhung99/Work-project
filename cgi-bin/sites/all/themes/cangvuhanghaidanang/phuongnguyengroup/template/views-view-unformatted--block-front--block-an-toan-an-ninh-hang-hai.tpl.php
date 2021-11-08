<ul class="popular-posts scrollspy">
  <?php foreach ($rows as $id => $row): ?>
    <li class="clearfix d-flex align-items-center">
      <?php print $row; ?>
    </li>
  <?php endforeach; ?>
</ul>
