<?php
?>
<section class="blog-area pb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h3><?= t('Dịch vụ')?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-carousel">
                <?php foreach ($rows as $id => $row): ?>

                        <?php print $row; ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

