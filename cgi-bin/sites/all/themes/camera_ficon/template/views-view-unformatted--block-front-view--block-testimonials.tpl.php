<section class="testimonials-one testimonials-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h2><span>Đối tác</span><b>Đối tác</b></h2>
                        <p class="subtitle-testimonials">Hàng đầu thế giới và khu vực</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonials-one__carousel thm__owl-carousel owl-theme owl-carousel">
                    <?php foreach ($rows as $id => $row): ?>
                        <?php print $row; ?>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</section>
