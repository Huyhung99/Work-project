<?php print render($page['content']['metatags']);?>
<div class="page-wrapper">
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="momain-menu clearfixbile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>
                        <div class="mobile-nav-toggler">
                            <div>...</div>
                            <div>...</div>
                            <div>...</div>
                        </div>
                        <!-- Main theme-btn search-togglerMenu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <?php print getMainMenuNhomKinhHungPhat(); ?>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
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
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>
                    <?php endif; ?>
                </div>
                <!--Right Col-->
                <div class="float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                        <?php //print getMainMenuNhomKinhHungPhat()?>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>
                    <?php endif; ?></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
    <section class="page-title" style="background-image: url('/sites/default/files/banner-page-sub1.jpg');">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                        <?php print render($title_suffix); ?>
                    </div>
                    <?php if ($breadcrumb): ?>
                        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- sidebar-page-container -->
    <?php print $messages; ?>
    <section class="sidebar-page-container">
        <?php $col = 12; ?>
        <?php if($page['sidebar_first']){
            $col = 9;
        } ?>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-<?=$col?> content-side">
                    <?php if($page['content']):?>
                        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php print render($page['content']); ?>
                    <?php endif; ?>
                </div>
                <?php if($page['sidebar_first']): ?>
                    <div class="col-lg-3 sidebar">
                        <div class="blog-sidebar">
                            <?php  print render($page['sidebar_first'])?>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container--end -->
    <footer class="main-footer">
        <div class="container">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-lg-5">
                            <?php if($page['col1_footer']) print render($page['col1_footer']) ?>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-3">
                            <div class="footer-widget contact-widget">
                                <?php if($page['col2_footer']) print render($page['col2_footer']) ?>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4">
                            <div class="footer-widget instagram-widget pl-lg-5">
                                <?php if($page['col3_footer']) print render($page['col3_footer']) ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="auto-container">
                <div class="footer-bottom">
                    <?php if($page['footer_bottom']) print render($page['footer_bottom']) ?>
                </div>
            </div>
        </div>
    </footer>
</div>
