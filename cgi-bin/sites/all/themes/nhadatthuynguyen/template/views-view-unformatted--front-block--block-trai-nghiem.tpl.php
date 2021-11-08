<?php
?>
<section class="room-area pb-10">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 pt-30">
                <div class="section-title text-center">
                    <h3><?= t('Trải nghiệm trọn vẹn')?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <?php foreach ($rows as $id => $row): ?>
            <div class="col-md-3" wfd-id = "148">
                <?php print $row; ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
