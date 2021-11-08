<!-- News Section Start -->
<section class="bg-silver-light pdt-30 pdb-30 pdt-sm-40 pdb-sm-30 section-news" data-background="/sites/all/themes/AnhPhatFood/assets/images/bg/abs-bg4.png">
    <div class="section-title mrb-30 mrb-md-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6 col-6">
                    <div class="section-title-left-part">
                        <h3 class="title mrt-10 mrb-10">Tin tức</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-6 col-6 align-self-center text-left text-lg-right">
                  <?php $link=''; $path_edit=explode('/',$_SERVER['PHP_SELF']); if($_SERVER['PHP_SELF']){$link='/'.$path_edit[1];}?>
                  <a href="/chuyen-muc/tin-tuc" class="btn-danger-edit pdr-20 pdl-20 pdt-10 pdb-10 btn-gradient-color btn-md"><i class="fa fa-angle-double-right mrr-10" aria-hidden="true"></i>XEM TẤT CẢ</a>
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
