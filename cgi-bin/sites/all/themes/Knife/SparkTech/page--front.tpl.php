
<div class="wrap" id="top">


    <!--    <div class="topbar">-->
    <!--        <div class="container">-->
    <!--            <p>FREE Shipping on Orders Over $99!</p>-->
    <!--        </div>-->
    <!--    </div>-->

    <div class="header-replace"></div>
    <header class="header">

        <div class="header__inner">
            <div class="container">
                <div class="header__grid-wrapper">
                    <div class="header__grid">

                        <div class="header__cell header__cell--logo">

                            <a href="<?php print $front_page; ?>" title="<?php print t('Spark Tech'); ?>" rel="home" id="logo" class="logo">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Spark Tech'); ?>" />
                            </a>

                        </div>

                        <div class="header__cell header__cell--hmenu">

                            <nav class="hmenu">
                                <?=getMenuSparkTech()?>
                            </nav>

                        </div>

                        <div class="header__cell header__cell--hsmenu">
                          <nav class="hsmenu login-in">
                            <ul>
                              <li>
                                <a href="/user/login">
                                  <i class="fa fa-user" aria-hidden="true"></i>
                                  <span class="mobile-small-hide">Đăng nhập</span>
                                </a>
                              </li>
                              <li class="cart_menu blockcart">
                                <?php if($page['mini_cart']) print render($page['mini_cart']) ?>
                              </li>
                            </ul>
                          </nav>
                        </div>

                        <div class="header__cell header__cell--cbutton">

                            <div class="cbutton js-menu-switcher tablet-small-show-inline-block">
                                <div class="cbutton__inner">
                                    <div class="cbutton__item"></div>
                                    <div class="cbutton__item"></div>
                                    <div class="cbutton__item"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="menu-overlay tablet-small-show">
            <div class="menu-overlay__content">
                <div class="menu-overlay__content-inner">
                    <div class="container">
                        <nav class="mmenu js-clone-from-hmenu">
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__offset js-goto-offset"></div>

    </header>
    <?php print $messages?>
    <?php if($page['main_content_front']) print render($page['main_content_front']) ?>
    <?php if ($page['html_main_content_front']) print html_entity_decode(render($page['html_main_content_front']))?>




    <div class="section section--subscribe">
        <div class="section__bg">
            <div class="section__bg-inner img-to-bg">
                <img src="/sites/all/themes/SparkTech/wp-content/uploads/2018/10/days-left-bg.jpg" alt="SparkTech">
            </div>
        </div>
        <div class="container">

            <h2 class="block-title">Nâng tầm thương hiệu Việt</h2>

            <div class="summary mw640 margin-auto">
                <p>Spark Tech đã tiên phong trong việc hoàn thành xin giấy phép sản xuất chính thống, đồng thời thúc đẩy tìm kiếm và liên kết với các đối tác và nhà cung cấp nguyên liệu, đảm bảo đầu ra chất lượng cho sản phẩm.</p>
            </div>


            <h3>Để lại email để theo dõi cùng Spark Tech</h3>

            <?php
            $node = node_load(798);
                webform_node_view($node,'full');
            print theme_webform_view($node->content);
            ?>
        </div>
    </div>
    <?php print views_embed_view('front_block','block_gallery_front')?>


    <footer class="footer">
        <div class="container">

            <div class="footer__top">
                <div class="footer__top-grid-wrapper">
                    <div class="footer__top-grid">

                        <div class="footer__top-col">
                            <?php if ($page['footer_col1']) print html_entity_decode(render($page['footer_col1']))?>
                            <div class="form-footer">
                                <?php
                                $node = node_load(798);
                                webform_node_view($node,'full');
                                print theme_webform_view($node->content);
                                ?>
                            </div>
                        </div>

                        <div class="footer__top-col">

                            <nav class="fmenu">

                                <div class="fmenu__grid-wrapper">
                                    <div class="fmenu__grid">
                                        <div class="fmenu__col">
                                        <?php if ($page['footer_col2']) print html_entity_decode(render($page['footer_col2']))?>
                                        </div>
                                        <div class="fmenu__col">
                                        <?php if ($page['footer_col3']) print html_entity_decode(render($page['footer_col3']))?>
                                        </div>
                                        <div class="fmenu__col">
                                            <?php if ($page['footer_col4']) print html_entity_decode(render($page['footer_col4']))?>
                                        </div>

                                        <div class="fmenu__col">
                                            <?php if ($page['footer_col5']) print html_entity_decode(render($page['footer_col5']))?>
                                        </div>

                                    </div>
                                </div>

                            </nav>

                        </div>
                    </div>
                </div>

                <div class="footer-subscribe-place-2"></div>

            </div>

            <div class="footer__bottom">
                <div class="footer__bottom-grid">

                    <div class="footer__bottom-col" >

                        <nav class="social">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <svg class="icon icon--instagram">
                                            <use xlink:href="#icon-instagram"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <svg class="icon icon--youtube">
                                            <use xlink:href="#icon-youtube"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <svg class="icon icon--facebook">
                                            <use xlink:href="#icon-facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <svg class="icon icon--twitter">
                                            <use xlink:href="#icon-twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="footer__bottom-col">

                        <div class="footer__copyright">
                            <p>Thiết kế bởi <a
                                        href="//minhhien.com.vn" target="_blank">MinhhienSolutions</a></p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </footer>

    <div id="log"></div>


</div>
<div class="clear"></div>



<div class="xoo-cp-opac"></div>
<div class="xoo-cp-modal">
    <div class="xoo-cp-container">
        <div class="xoo-cp-outer">
            <div class="xoo-cp-cont-opac"></div>
            <span class="xoo-cp-preloader xoo-cp-icon-spinner"></span>
        </div>
        <span class="xoo-cp-close xoo-cp-icon-cross"></span>

        <div class="xoo-cp-content"></div>

        <div class="xoo-cp-btns">
            <a class="xoo-cp-btn-vc xcp-btn" href="cart/index.html">View Cart</a>
            <a class="xoo-cp-btn-ch xcp-btn" href="cart/index.html">Checkout</a>
            <a class="xoo-cp-close xcp-btn">Continue Shopping</a>
        </div>
    </div>
</div>


<div class="xoo-cp-notice-box" style="display: none;">
    <div>
        <span class="xoo-cp-notice"></span>
    </div>
</div>
