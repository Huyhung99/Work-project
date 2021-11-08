<!-- News Section Start -->
<section class="bg-silver-light pdt-40 pdb-40 pdt-sm-30 pdb-sm-0 section-news" data-background="/sites/all/themes/AnhPhatFood/assets/images/bg/abs-bg4.png">
    <div class="section-title mrb-30 mrb-md-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-6 col-6">
                    <div class="section-title-left-part ">
                        <h3 class="title ">Tin tức</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-6 col-6 text-right text-lg-right">
                    <a href="/chuyen-muc/tin-tuc" class="cs-btn-one btn-gradient-color btn-news">XEM THÊM</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <?php foreach ($rows as $row):?>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <?php print $row?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<!-- News Section End -->
