<?php

?>
<?php

$sanpham = false;
foreach ($node->field_chuyen_muc['und'] as $item){
    if ($item['tid'] == 2){
        $sanpham = true;
    }
}

?>
<?php print render($page['content']['metatags']); ?>

<?php if ($sanpham):?>
    <div class="site">
        <header class="site__header d-lg-none">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <?php if ($logo): ?>
                                <a class="mobile-header__logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                </a>
                            <?php endif; ?>
                            <div class="search search--location--mobile-header mobile-header__search">
                                <div class="search__body">
                                    <?php if($page['search__body']) print html_entity_decode(render($page['search__body'])); ?>
                                </div>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                    <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="/sites/default/files/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="indicator indicator--mobile">
                                    <a href="#" class="indicator__button">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" width="196px" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="site-header__search">
                        <div class="search search--location--header ">
                            <div class="search__body">
                                <?php if($page["search__body"]) print html_entity_decode(render($page['search__body'])) ?>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <?php if($page['customer_service']) print html_entity_decode(render($page['customer_service'])) ?>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <div class="nav-panel__departments">
                                    <!-- .departments -->
                                    <div class="departments" data-departments-fixed-by="">
                                        <div class="departments__body">
                                            <div class="departments__links-wrapper">
                                                <div class="departments__submenus-container"></div>
                                                <?php print get_menu_sub_page_product()?>
                                            </div>
                                        </div>
                                        <button class="departments__button">
                                            <svg class="departments__button-icon" width="18px" height="14px">
                                                <use xlink:href="/sites/default/files/sprite.svg#menu-18x14"></use>
                                            </svg>
                                            Danh mục sản phẩm
                                            <svg class="departments__button-arrow" width="9px" height="6px">
                                                <use xlink:href="/sites/default/files/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- .departments / end -->
                                </div>
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <?php print getTopMainMenu(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <?php if ($breadcrumb): ?>
                                    <li id="breadcrumb-item"><?php print $breadcrumb; ?>
                                    </li>
                                <?php endif; ?>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                        <?php print render($title_suffix); ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="shop-layout shop-layout--sidebar--start">
                    <div class="shop-layout__content">
                        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php print render($page['help']); ?>
                        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                        <?php print render($page['content']); ?>
                        <!-- .block-products-carousel -->
                        <!-- .block-products-carousel / end -->
                    </div>
                    <div class="shop-layout__sidebar">
                        <div class="block block-sidebar">
                            <div class="block-sidebar__item">
                                <div class="widget-categories widget-categories--location--shop widget">
                                    <h4 class="widget__title">Danh mục sản phẩm</h4>
                                    <?php print get_categories_sub_page_product()?>
                                </div>
                            </div>
                            <?php if ($page['sidebar-right']): ?>
                                <?php print render($page['sidebar-right']); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
            <footer class="site__footer">
                <div class="site-footer">
                    <div class="container">
                        <div class="site-footer__widgets">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <?php if($page['footer-col-1']) print html_entity_decode(render($page['footer-col-1']))?>
                                </div>
                                <div class="col-6 col-md-3 col-lg-3">
                                    <?php if($page['footer-col-2']) print html_entity_decode(render($page['footer-col-2']))?>
                                </div>
                                <div class="col-6 col-md-3 col-lg-2">
                                    <?php if($page['footer-col-3']) print html_entity_decode(render($page['footer-col-3']))?>
                                </div>
                                <div class="col-12 col-md-12 col-lg-3">
                                    <?php if($page['footer-col-4']) print html_entity_decode(render($page['footer-col-4']))?>
                                </div>
                            </div>
                        </div>
                        <?php if($page['coppyright']) print render($page['coppyright'])?>
                    </div>
                    <div class="totop">
                        <div class="totop__body">
                            <div class="totop__start"></div>
                            <div class="totop__container container"></div>
                            <div class="totop__end">
                                <button type="button" class="totop__button">
                                    <i class="fas fa-arrow-up"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="mobilemenu">
            <div class="mobilemenu__backdrop"></div>
            <div class="mobilemenu__body">
                <div class="mobilemenu__header">
                    <div class="mobilemenu__title">Menu</div>
                    <button type="button" class="mobilemenu__close">
                        <svg width="20px" height="20px">
                            <use xlink:href="/sites/default/files/sprite.svg#cross-20"></use>
                        </svg>
                    </button>
                </div>
                <div class="mobilemenu__content">
                    <?php print getMenuMobile(); ?>
                </div>
            </div>
        </div>
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="/sites/default/files/sprite.svg#cross-20"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <?php print getMenuMobile(); ?>
            </div>
        </div>
    </div>
<?php else:?>
    <div class="site">
        <header class="site__header d-lg-none">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <?php if ($logo): ?>
                                <a class="mobile-header__logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                </a>
                            <?php endif; ?>
                            <div class="search search--location--mobile-header mobile-header__search">
                                <div class="search__body">
                                    <?php if($page['search__body']) print html_entity_decode(render($page['search__body'])); ?>
                                </div>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                    <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="/sites/default/files/sprite.svg#search-20"></use>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="indicator indicator--mobile">
                                    <a href="#" class="indicator__button">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" width="196px" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="site-header__search">
                        <div class="search search--location--header ">
                            <div class="search__body">
                                <?php if($page["search__body"]) print html_entity_decode(render($page['search__body'])) ?>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <?php if($page['customer_service']) print html_entity_decode(render($page['customer_service'])) ?>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <div class="nav-panel__departments">
                                    <!-- .departments -->
                                    <div class="departments  " data-departments-fixed-by=".block-slideshow">
                                        <div class="departments__body" id="left-menu-category">
                                            <div class="departments__links-wrapper">
                                                <div class="departments__submenus-container"></div>
                                                <?php print get_menu_sub_page_product()?>
                                            </div>
                                        </div>
                                        <button class="departments__button">
                                            <svg class="departments__button-icon" width="18px" height="14px">
                                                <use xlink:href="/sites/default/files/sprite.svg#menu-18x14"></use>
                                            </svg>
                                            Danh mục sản phẩm
                                            <svg class="departments__button-arrow" width="9px" height="6px">
                                                <use xlink:href="/sites/default/files/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- .departments / end -->
                                </div>
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <?php print getTopMainMenu(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <?php if ($breadcrumb): ?>
                                    <li id="breadcrumb-item"><?php print $breadcrumb; ?>
                                        <svg class="breadcrumb-arrow" width="6px" height="9px">
                                            <use xlink:href="/sites/default/files/sprite.svg#arrow-rounded-right-6x9"></use>
                                        </svg>
                                    </li>
                                <?php endif; ?>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                        <?php print render($title_suffix); ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php $col = 12; ?>
                    <?php if ($page['sidebar-right']): ?>
                        <?php $col = 9;?>
                    <?php endif; ?>
                    <?php print $messages; ?>
                    <div class="col-12 col-lg-<?=$col?>">
                        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php print render($page['help']); ?>
                        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                        <?php print render($page['content']); ?>
                    </div>
                    <?php if ($page['sidebar-right']): ?>
                        <div class="col-12 col-lg-3">
                            <?php print render($page['sidebar-right']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <footer class="site__footer">
            <div class="site-footer">
                <div class="container">
                    <div class="site-footer__widgets">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <?php if($page['footer-col-1']) print html_entity_decode(render($page['footer-col-1']))?>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3">
                                <?php if($page['footer-col-2']) print html_entity_decode(render($page['footer-col-2']))?>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <?php if($page['footer-col-3']) print html_entity_decode(render($page['footer-col-3']))?>
                            </div>
                            <div class="col-12 col-md-12 col-lg-3">
                                <?php if($page['footer-col-4']) print html_entity_decode(render($page['footer-col-4']))?>
                            </div>
                        </div>
                    </div>
                    <?php if($page['coppyright']) print render($page['coppyright'])?>
                </div>
                <div class="totop">
                    <div class="totop__body">
                        <div class="totop__start"></div>
                        <div class="totop__container container"></div>
                        <div class="totop__end">
                            <button type="button" class="totop__button">
                                <i class="fas fa-arrow-up"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="/sites/default/files/sprite.svg#cross-20"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <?php print getMenuMobile(); ?>
            </div>
        </div>
    </div>
<?php endif;?>

