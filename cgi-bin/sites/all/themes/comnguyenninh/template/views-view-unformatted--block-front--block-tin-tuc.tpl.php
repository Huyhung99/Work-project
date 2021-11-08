<?php
?>
<section class="ulockd-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                <div class="ulockd-blog-title">
                    <h2 class="text-uppercase">Tin mới nhất</h2>
                </div>
            </div>
        </div>
        <div class="row">
                <?php foreach ($rows as $id => $row): ?>
                     <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                        <?php print $row; ?>
                    </div>
                <?php endforeach; ?>

        </div>
    </div>
</section>

