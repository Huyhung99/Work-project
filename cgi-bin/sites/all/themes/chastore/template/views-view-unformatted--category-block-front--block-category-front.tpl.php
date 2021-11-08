<?php
?>
<div class="categories-item-warap section-pt-30 section-pb">
    <div class="container">
        <div class="row">
                <?php foreach ($rows as $id => $row): ?>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <?php print $row; ?>
                    </div>

                <?php endforeach; ?>

        </div>
    </div>
</div>

