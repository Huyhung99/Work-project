<div class="container">
  <div class="row">
    <?php foreach ($rows as $id => $row): ?>
        <div class="col-md-4">
            <div class="service-front">
              <?php print $row; ?>
            </div>
        </div>
    <?php endforeach; ?>
  </div>
</div>
