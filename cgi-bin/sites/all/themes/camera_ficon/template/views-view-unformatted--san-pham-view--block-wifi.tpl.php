<section class="our-team-sec ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <img src="/sites/default/files/wifi_0.png" alt="Camera An Việt" class="img-title"><h2><?php print t('Wifi'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($rows as $id => $row): ?>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <?php print $row; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
