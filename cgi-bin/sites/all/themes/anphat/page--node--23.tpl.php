<div class="wrapper">
    <header class="header-nav menu_style_home_one style2 home3 navbar-scrolltofixed stricky main-menu">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img class="nav_logo_img img-fluid" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="<?php print $front_page; ?>" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                <img class="logo2 img-fluid" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <?php print getMainMenuBDSAnPhat(); ?>
        </nav>
    </header>

    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="main_logo_home2 text-center">
                    <img class="nav_logo_img img-fluid mt20" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </div>
                <ul class="menu_bar_home2">
                    <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                </ul>
            </div>
        </div><!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <?php print getMainMenuBDSAnPhatMobile(); ?>
        </nav>
    </div>
    <?php print render($page['content']); ?>


