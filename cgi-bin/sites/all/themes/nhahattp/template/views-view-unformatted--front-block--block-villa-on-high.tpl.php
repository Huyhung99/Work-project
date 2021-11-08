<section class="room-area p-t90">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h3 class="text-uppercase"><?php print t('DỊCH VỤ - TIỆN ÍCH') ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="room-carousel">
                <?php foreach ($rows as $id => $row): ?>
                        <?php print $row; ?>
                <?php endforeach; ?>
        </div>
    </div>
</section>

