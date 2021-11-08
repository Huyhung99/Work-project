<div class="widget dark">
  <h5 class="widget-title line-bottom">Tin mới nhất</h5>
    <?php foreach ($rows as $id => $row): ?>
      <article class="post media-post clearfix pb-0 mb-10">
          <?php print $row; ?>
      </article>
    <?php endforeach; ?>
  </div>

