<?php
?>
<div class="single-footer-widget">
    <h3>HÌNH ẢNH</h3>
    <div class="instagram-image">

    <div class="row">
        <?php foreach ($rows as $id => $row): ?>
            <div class="col-md-3 col-xs-6 plr-5">
                <?php print $row; ?>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>

