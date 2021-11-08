<?php
?>
<div class="banner-area">
    <div class="container">
        <div class="row">
                <?php foreach ($rows as $id => $row): ?>
                    <div class="col-lg-6 col-md-6">
                        <?php print $row; ?>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>

