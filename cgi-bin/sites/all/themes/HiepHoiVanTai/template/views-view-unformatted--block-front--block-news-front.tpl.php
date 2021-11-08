<?php
/** @var $view */
/** @var $rows */
?>
<section id="blog" class="blog-section blog-style-three">
    <div class="container">
        <div class="section-title text-center title-three headline">
            <h2><?= $view->get_title() ?></h2>
        </div>
        <div class="blog-content-area-3">
            <div class="row">
                <?php foreach ($rows as $row): ?>
                    <div class="col-lg-4">
                        <?php print $row ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>



