<div class="display-none-mb">
  <div class="row">
    <?php foreach ($rows as $id => $row): ?>
      <div class="col-sm-6">
        <div class="block-img-next-form register-<?=$id?>">
          <?php print $row; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
