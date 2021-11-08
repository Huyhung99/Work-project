<section class="our-team featured-home2">
    <div class="container">
        <div class="section-title section-title-left section-title-m10">
            <h2><?= $view->get_title() ?></h2>
        </div>
        <div class="our-team-content">
            <div id="hoc-vien-tieu-bieu" class="owl-carousel owl-theme">
                <?php foreach ($rows as $id => $row): ?>
                    <article class="item" >
                        <?php print $row; ?>
                    </article>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>