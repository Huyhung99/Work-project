<?php
?>
<section class="testimonials-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3">
                <div class="section-title-s3">

                    <h1><span>Diễn giả CROW1-VN</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="testimonial-grids clearfix">
                    <?php foreach ($rows as $id => $row): ?>
                    <div class="grid"><?php print $row; ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
