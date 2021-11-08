<?php print render($page['content']['metatags']); ?>
<div class="page-wrapper">
    <!-- Main Header -->
    <header class="main-header header-style-five">
        <!-- Header Upper -->
        <section class="header-upper">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo">
                                <?php if ($logo): ?>
                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                                       id="logo">
                                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <?php if ($page['header']) print render($page['header']) ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner-container">

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img
                                    src="<?php print drupal_get_path('theme', 'nhomkinh') ?>/assets/images/icons/icon-bar.png"
                                    alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <?php print getMainMenuNhomKinhHungPhat(); ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                        </a>
                    <?php endif; ?>
                </div>
                <!--Right Col-->
                <div class="float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                        <?php //print getMainMenuNhomKinhHungPhat(); ?>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>
            <nav class="menu-box">
                <div class="nav-logo">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->
    <?php if ($page['gioi_thieu']) print html_entity_decode(render($page['gioi_thieu'])) ?>
    <?php if ($page['main_frontend']) print render($page['main_frontend']) ?>
    <div class="contact-section-three">
        <?= node_load(106)->field_tom_tat['und'][0]['value']; ?>
        <?= node_load(103)->field_tom_tat['und'][0]['value']; ?>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-form-area">
                        <h3>ĐỂ LẠI THÔNG TIN TƯ VẤN</h3>
                        <p class="mb-0 mt-5px">Vui long để lại thông tin tư vấn, chúng tôi sớm liên hệ lại, xin cảm
                            ơn!</p>
                        <?php if ($page['form_tư_van']) print render($page['form_tư_van']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="container">-->
<!--        <div class="custom-row">-->
<!--            <div class="item-product">-->
<!--                <div class="inner-box">-->
<!--                    <div class="img-hieuung overflow-hd"-->
<!--                         style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;"><a-->
<!--                                href="/san-pham/armani-21b6126854"><img class="img-responsive img-fluid" typeof="foaf:Image"-->
<!--                                                                        src="https://xuanduc.com.vn/sites/default/files/styles/500_x_400/public/untitled-2.jpg?itok=7SAbKSVR"-->
<!--                                                                        width="500" height="400" alt="ARMANI 21.B.612.6854"-->
<!--                                                                        title="ARMANI 21.B.612.6854"></a></div>-->
<!--                    <div class="content">-->
<!--                        <h3><a href="/san-pham/armani-21b6126854">ARMANI 21.B.612.6854</a></h3>-->
<!--                        <p class="text-center mb-15"><a href="tel:0936809468" class="lien_he_dat"><i class="fa fa-phone"-->
<!--                                                                                                     aria-hidden="true"></i>-->
<!--                                : Đặt ngay</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item-product">-->
<!--                <div class="inner-box">-->
<!---->
<!--                    <div class="img-hieuung overflow-hd"-->
<!--                         style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;"><a-->
<!--                                href="/san-pham/armani-21b6126854"><img class="img-responsive img-fluid" typeof="foaf:Image"-->
<!--                                                                        src="https://xuanduc.com.vn/sites/default/files/styles/500_x_400/public/untitled-2.jpg?itok=7SAbKSVR"-->
<!--                                                                        width="500" height="400" alt="ARMANI 21.B.612.6854"-->
<!--                                                                        title="ARMANI 21.B.612.6854"></a></div>-->
<!--                    <div class="content">-->
<!--                        <h3><a href="/san-pham/armani-21b6126854">ARMANI 21.B.612.6854</a></h3>-->
<!--                        <p class="text-center mb-15"><a href="tel:0936809468" class="lien_he_dat"><i class="fa fa-phone"-->
<!--                                                                                                     aria-hidden="true"></i>-->
<!--                                : Đặt ngay</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item-product">-->
<!--                <div class="inner-box">-->
<!---->
<!--                    <div class="img-hieuung overflow-hd"-->
<!--                         style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;"><a-->
<!--                                href="/san-pham/armani-21b6126854"><img class="img-responsive img-fluid" typeof="foaf:Image"-->
<!--                                                                        src="https://xuanduc.com.vn/sites/default/files/styles/500_x_400/public/untitled-2.jpg?itok=7SAbKSVR"-->
<!--                                                                        width="500" height="400" alt="ARMANI 21.B.612.6854"-->
<!--                                                                        title="ARMANI 21.B.612.6854"></a></div>-->
<!--                    <div class="content">-->
<!--                        <h3><a href="/san-pham/armani-21b6126854">ARMANI 21.B.612.6854</a></h3>-->
<!--                        <p class="text-center mb-15"><a href="tel:0936809468" class="lien_he_dat"><i class="fa fa-phone"-->
<!--                                                                                                     aria-hidden="true"></i>-->
<!--                                : Đặt ngay</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item-product">-->
<!--                <div class="inner-box">-->
<!---->
<!--                    <div class="img-hieuung overflow-hd"-->
<!--                         style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;"><a-->
<!--                                href="/san-pham/armani-21b6126854"><img class="img-responsive img-fluid" typeof="foaf:Image"-->
<!--                                                                        src="https://xuanduc.com.vn/sites/default/files/styles/500_x_400/public/untitled-2.jpg?itok=7SAbKSVR"-->
<!--                                                                        width="500" height="400" alt="ARMANI 21.B.612.6854"-->
<!--                                                                        title="ARMANI 21.B.612.6854"></a></div>-->
<!--                    <div class="content">-->
<!--                        <h3><a href="/san-pham/armani-21b6126854">ARMANI 21.B.612.6854</a></h3>-->
<!--                        <p class="text-center mb-15"><a href="tel:0936809468" class="lien_he_dat"><i class="fa fa-phone"-->
<!--                                                                                                     aria-hidden="true"></i>-->
<!--                                : Đặt ngay</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
    <?php if ($page['main_frontend_tin_tuc']) print render($page['main_frontend_tin_tuc']) ?>
    <footer class="main-footer">
        <div class="container">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-lg-5">
                            <?php if ($page['col1_footer']) print render($page['col1_footer']) ?>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-3">
                            <div class="footer-widget contact-widget">
                                <?php if ($page['col2_footer']) print render($page['col2_footer']) ?>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4">
                            <div class="footer-widget instagram-widget pl-lg-5">
                                <?php if ($page['col3_footer']) print render($page['col3_footer']) ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="auto-container">
                <div class="footer-bottom">
                    <?php if ($page['footer_bottom']) print render($page['footer_bottom']) ?>
                </div>
            </div>
        </div>
    </footer>
</div>

