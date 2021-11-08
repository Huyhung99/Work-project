<?php
?>
<section id="services" class="bg-silver-light">
    <div class="container pb-30">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-uppercase mt-0 line-height-1"><span class="text-theme-colored2 text-uppercase">Dịch vụ</span></h2>
                    <div class="title-icon">
                        <img class="mb-10" src="/sites/default/files/title-icon.png" alt="Nha Khoa Hoàng Anh">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                    <?php foreach ($rows as $id => $row): ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                        <?php print $row; ?>
                        </div>
                    <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

