<?php print render($page['content']['metatags']);?>
<div class="wrapper-area">
  <header>
    <div class="header-style1-area">
      <div class="header-top-area">
        <div class="container">
          <?php if($page['top_header']) print html_entity_decode(render($page['top_header'])) ?>
        </div>
      </div>
      <div class="header-bottom-area" id="sticker">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="logo-area">
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
              </div>
            </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="main-menu-area">
              <nav>
                <?php print getMainMenuNuocMamCatHai(); ?>
              </nav>
            </div>
              </div>
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                  <ul class="header-cart-area">
                      <li class="header-search">
                          <?php if ($page['tim_kiem_block']) print render($page['tim_kiem_block'])?>
                      </li>
                  </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <?php print getMainMenuNuocMamCatHai(); ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area End -->
  </header>

  <?php if($page['main_frontend']) print render($page['main_frontend']) ?>
  <?php if($page['html_main_frontend']) print html_entity_decode(render($page['html_main_frontend']))  ?>
  <?php if($page['main_frontend2']) print render($page['main_frontend2']) ?>
  <?php if($page['html_main_frontend2']) print html_entity_decode(render($page['html_main_frontend2']))  ?>

    <footer>
        <div class="footer-area-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <?php if($page['col1_footer']) print html_entity_decode(render($page['col1_footer']))  ?>

                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-6">
                        <?php if($page['col2_footer']) print html_entity_decode(render($page['col2_footer']))  ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-6">
                        <?php if($page['col3_footer']) print html_entity_decode(render($page['col3_footer']))  ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <?php if($page['col4_footer']) print render($page['col4_footer']) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <?php if($page['footer_bottom']) print html_entity_decode(render($page['footer_bottom']))  ?>
            </div>
        </div>
    </footer>

</div>

