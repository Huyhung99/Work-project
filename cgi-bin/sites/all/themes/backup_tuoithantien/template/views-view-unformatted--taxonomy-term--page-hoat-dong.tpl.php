<input type="hidden" id="type-path" value="hoat-dong">
<input type="hidden" id="type-hover" value="bg-violet">
<div class="row">
  <?php foreach ($rows as $id => $row): ?>
    <div class="col-md-4">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>
