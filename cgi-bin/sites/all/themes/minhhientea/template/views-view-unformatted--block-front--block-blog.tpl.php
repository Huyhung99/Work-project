<div class="recipe-of-the-day2-area">
  <div class="container">
    <h2 class="title-color">Chia sẻ</h2>
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-md-4">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
