<section class="blog-section">
    <div class="line-shape">
        <span class="line-one"></span>
        <span class="line-two"></span>
        <span class="line-three"></span>
        <span class="line-four"></span>
    </div>
    <div class="auto-container">
        <div class="sec-title style-two text-center">
            <h2 class="tintuc">TIN TỨC</h2>
        </div>
        <div class="row">
            <?php foreach ($rows as $id => $row): ?>
            <div class="col-lg-6 col-12">
                <div class="news-block-one">
                    <div class="inner-box">
                        <?php print $row; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
