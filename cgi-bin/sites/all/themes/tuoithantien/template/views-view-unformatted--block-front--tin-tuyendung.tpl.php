<div class="row">
  <div class="block-tuyen-dung">
    <div class="container-flex">
      <?php foreach ($rows as $id => $row): ?>
        <div class="item item-<?=($id+1)?>">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
