<section class="blog section-padding-large">
    <div class="container view-mobile">
        <div class="section-title section-title-left section-title-m10">
            <h2 class="no-mg-left"><?= $view->get_title() ?></h2>
        </div>
        <div class="blog-content home2-blog-content">
            <div class="row">
                <?php foreach ($rows as $id => $row): ?>

                    <?php print $row; ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>