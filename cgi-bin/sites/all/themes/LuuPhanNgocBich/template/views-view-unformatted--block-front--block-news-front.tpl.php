<section id="blog-1" class="wide-60 blog-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">
                <h3 class="font-30">Tin tức</h3>
            </div>
        </div>
        <div class="row">
           <?php foreach ($rows as $row):?>
            <div class="col-lg-4">
                <?php print $row?>
            </div>
            <?php endforeach;?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="all-posts-btn mb-40 wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                    <a href="/tin-tuc" class="btn btn-red">Xem thêm <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
