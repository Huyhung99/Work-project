<?php print render($page['content']['metatags']); ?>
<header class="header">
    <div class="header-top hidden-tablet-landscape red-bg">
        <div class="container">
            <div
                    class="header-top-content display-flex ">                <?php if ($page['left-topbar']) {
                    print render($page['left-topbar']);
                } ?><?php if ($page['right-topbar']) {
                    print render($page['right-topbar']);
                } ?>            </div>
        </div>
    </div>
    <div class="header-bottom hidden-tablet-landscape" id="js-navbar-fixed">
        <div class="container">
            <div class="header-bottom">
                <div class="header-bottom-content display-flex">
                    <div class="logo">                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>"
                               title="<?php print t('Home'); ?>" rel="home" id="logo-desktop">
                                <img src="<?php print $logo; ?>"
                                     alt="<?php print t('Home'); ?>"/>
                            </a>                        <?php endif; ?>
                    </div>
                    <div class="menu-search display-flex">
                        <nav class="menu">
                            <div>                                <?php print getMainMenu(); ?>                            </div>
                        </nav>
                        <div class="search-box">
                            <form action="/search" method="get"
                                  id="views-exposed-form-taxonomy-term-page-1"
                                  accept-charset="UTF-8"><input type="text"
                                                                placeholder="Tìm kiếm"
                                                                name="title">
                                <div class="search-icon font-color-white display-flex-center"><i
                                            class="fa fa-search" aria-hidden="true"></i></div>
                            </form> <?php if ($page['lang']) {
                                print render($page['lang']);
                            } ?>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-tablet-landscape-up header-mobile">
        <div class="header-top-mobile">
            <div class="container">
                <div class="logo">                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>"
                           title="<?php print t('Home'); ?>" rel="home" id="logo-mobile">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                        </a>                    <?php endif; ?>                </div>
                <div class="search-box">
                    <form action="/search" method="get"
                          id="views-exposed-form-taxonomy-term-page-1"
                          accept-charset="UTF-8"><input type="text" placeholder="Tìm kiếm"
                                                        name="title">
                        <div class="search-icon font-color-white display-flex-center"><i
                                    class="fa fa-search" aria-hidden="true"></i></div>
                    </form>
                </div>
                <button class="hamburger hamburger--spin hidden-tablet-landscape-up"
                        id="toggle-icon"><span class="hamburger-box">                            <span
                                class="hamburger-inner"></span>                        </span>
                </button>
            </div>
        </div>
        <div class="au-nav-mobile">
            <?php print getMainMenu(); ?>
        </div>
        <!-- <div class="clear"></div> -->
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-top-content display-flex">
                    <?php if ($page['left-topbar']) {
                        print render($page['left-topbar']);
                    } ?><?php if ($page['right-topbar']) {
                        print render($page['right-topbar']);
                    } ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</header>
<main>
    <section class="heading-page">
        <div class="container">
            <div class="heading-page-content">
                <div class="au-page-title"><h1><?php print $title; ?></h1></div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php print $front_page; ?>"><?php print t('Home') ?></a>
                        </li>
                        <li class="breadcrumb-item active"
                            aria-current="page"><?php print $title; ?></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section
            class="featured-course featured-course-sidebar section-padding-large">
        <div class="container">
            <div class="row">
                <div class="col-lg-<?= ($page['sidebar-right'] ? '9' : '12') ?> col-md-12 col-sm-12 col-12 featured-course-content">
                    <?php if ($is_admin && $show_messages && $messages): print $messages; endif; ?>
                    <?php if ($tabs): ?>
                        <div class="tabs"><?php print render($tabs); ?></div>
                    <?php endif; ?>
                    <?php if ($action_links): ?>
                        <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                    <?php print render($page['content']); ?>
                </div>
                <?php if ($page['sidebar-right']): ?>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12 right-sidebar">
                        <div class="sidebar-right">
                            <?php print render($page['sidebar-right']) ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 item-footer">                        <?php if ($page['footer-col-1']) {
                            print render($page['footer-col-1']);
                        } ?>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-7 col-sm-12 col-12 item-footer">                        <?php if ($page['footer-col-2']) {
                            print render($page['footer-col-2']);
                        } ?>
                    </div>
                    <div
                            class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12 item-footer">                        <?php if ($page['footer-col-3']) {
                            print render($page['footer-col-3']);
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <?php if ($page['coppyright']) {
                print render($page['coppyright']);
            } ?>
        </div>
    </div>
</footer>
<div id="back-to-top"><i class="fa fa-angle-up"></i></div>
