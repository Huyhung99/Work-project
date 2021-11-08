<div class="rs-gallery-4 rs-gallery">
    <?php $count = 0 ?>
    <?php foreach ($rows as $row): ?>
    <?php if ($count % 4 == 0 && $count != 0): ?>
    </div>
    <?php endif; ?>
<?php if ($count % 4 == 0): ?>
<div class="row">
    <?php endif; ?>
    <div class="col-lg-3 col-md-6">
        <?php print $row ?>
    </div>

    <?php $count++; ?>
    <?php endforeach; ?>
</div>
