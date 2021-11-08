<section class="featured-home2" id="featured-home2">
    <div class="container">
        <div class="section-title section-title-left section-title-m10 title-cus">
            <h2 class="no-mg-left"><?= $view->get_title() ?></h2>
        </div>
        <div class="featured-home2-content">
            <div class="row">
                <?php foreach ($rows as $id => $row): ?>
                    <div class="col-cus-5 item item-khoa-hoc">
                        <?php print $row; ?>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
</section>