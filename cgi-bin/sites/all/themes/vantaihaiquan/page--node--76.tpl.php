<header class="header-style-two">
    <div class="header-wrapper">
        <div class="header-top-area bg-gradient-color d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 header-top-left-part">
                        <?php print node_load(69)->field_mo_ta_slider['und'][0]['value'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bt_blank_nav"></div>
        <div class="header-navigation-area two-layers-header header-middlee bt_stick bt_sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"
                               class="navbar-brand logo f-left  mrt-md-0">
                                <img id="logo-image" class="img-center" src="<?php print $logo; ?>"
                                     alt="<?php print t('Home'); ?>"/>
                            </a>
                        <?php endif; ?>
                        <div class="mobile-menu-right"></div>
                        <div class="header-searchbox-style-two d-none d-xl-block">
                            <div class="side-panel side-panel-trigger text-right d-none d-lg-block">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </div>
                            <div class="show-searchbox">
                                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                            <div class="toggle-searchbox">
                                <form action="/tim-kiem" id="searchform-all" method="get">
                                    <div>
                                        <input type="text" id="s" class="form-control"
                                               placeholder="Nh???p n???i dung t??m ki???m" name="title">
                                        <div class="input-box">
                                            <input type="submit" value="" id="searchsubmit"><i
                                                    class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="side-panel-content">
                            <div class="close-icon">
                                <button><i class="fas fa-times"></i></button>
                            </div>
                            <div class="side-panel-logo mrb-30">
                                <?php if ($logo): ?>
                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                                       id="logo">
                                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="side-info mrb-30">
                                <div class="side-panel-element mrb-25">
                                    <h4 class="mrb-10">?????a ch??? v??n ph??ng</h4>
                                    <?php print node_load(87)->body['und'][0]['value'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu f-right">
                            <nav id="mobile-menu-right">
                                <?php print getMainMenuAnhPhatFood() ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <div class="page-title-content">
                    <h1 class="title text-white"><?php print $title; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><h2 class="element-invisible">B???n ??ang ??? ????y</h2>
                                <div id="breadcrumb"><a href="/">Trang ch???</a></div>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php print $title; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-section anim-object pdt-110 pdb-50 pdb-lg-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-6">
                <div class="about-image-block mrb-lg-60">
                    <img class="img-full image-1" src="/sites/default/files/box-3-ui-1.png" alt="">
                    <img class="img-full image-2" src="/sites/default/files/box-3-ui-2.png" alt="">
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <h2 class="title-under-line mrb-70"><span class="f-weight-400">L?? DO T???I SAO B???N N??N CH???N</span><br>H???I
                    QU??N LOGISTICS</h2>
                <p>V???i ?????i ng?? nh??n vi??n nhi???t huy???t c?? b??? d??y kinh nghi???m trong giao h??ng online. Ch??ng t??i lu??n ?????i
                    m???i s??ng t???o ????? ph???c v??? kh??ch h??ng t???t nh???t.</p>
                <ul class="list-items">
                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Ch??nh s??ch kh??ch h??ng ??u ????i</li>
                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>Ti???t ki???m v?? hi???u qu???</li>
                    <li><i class="fa fa-check mrr-10 text-primary-color"></i>H??? tr??? 24/7</li>
                </ul>
                <a href="/gioi-thieu" class="cs-btn-one mt-30">XEM TH??M</a>
            </div>
        </div>
        <div class="row mrt-100 mrt-lg-90">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="funfact mrb-lg-30 mrb-60">
                    <div class="icon">
                        <span class="webexflaticon flaticon-global"></span>
                    </div>
                    <div class="d-flex align-items-center mb-20">
                        <h2 class="counter">5 </h2><i class="fas fa-plus"></i>
                    </div>
                    <h5 class="title">QU???C GIA</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="funfact mrb-lg-30 mrb-60">
                    <div class="icon">
                        <span class="webexflaticon flaticon-woman-2"></span>
                    </div>
                    <div class="d-flex align-items-center mb-20">
                        <h2 class="counter">12000 </h2><i class="fas fa-plus"></i>
                    </div>
                    <h5 class="title">KH??CH H??NG</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="funfact mrb-lg-30 mrb-60">
                    <div class="icon">
                        <span class="webexflaticon flaticon-shopping-bag"></span>
                    </div>
                    <div class="d-flex align-items-center mb-20">
                        <h2 class="counter">25000 </h2><i class="fas fa-plus"></i>
                    </div>
                    <h5 class="title">????N H??NG</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="funfact mrb-lg-30 mrb-60">
                    <div class="icon">
                        <span class="webexflaticon flaticon-man-2"></span>
                    </div>
                    <div class="d-flex align-items-center mb-20">
                        <h2 class="counter">125 </h2><i class="fas fa-plus"></i>
                    </div>
                    <h5 class="title">NH??N VI??N</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-main-area" data-background="/sites/all/themes/AnhPhatFood/assets/images/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <?php if($page['footer_col_1']) print html_entity_decode(render($page['footer_col_1']))?>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">LI??N K???T</h5>
                        <?php print getMenuFooter() ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bg-footer pt-30">
                    <?php if($page['footer_col_3']) print html_entity_decode(render($page['footer_col_3']))?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <span class="text-white">?? 2021 Thi???t k??? b???i <a class="text-white" target="_blank"
                                                                             href="//minhhien.com.vn"> MinhHien Solutions</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-gradient-color">
    <i class="fab fa-angle-up"></i>
</div>
