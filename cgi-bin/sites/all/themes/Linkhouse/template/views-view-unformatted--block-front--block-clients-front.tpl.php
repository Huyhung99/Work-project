<?php
/** @var $view */
/** @var $rows */
?>
<section id="client-2" class="client-section-2 position-relative">
    <div class="section-title text-center title-three headline">
        <h2><?= $view->get_title() ?></h2>
    </div>
    <div class="client-content-2">
        <div class="row">
            <?php foreach ($rows as $row): ?>
            <div class="col-md-2 mb-xs-30 col-6">
                <?php print $row ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>