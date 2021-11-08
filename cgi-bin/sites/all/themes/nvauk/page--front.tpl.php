<?php print render($page['content']['metatags']); ?>

<div class="page-wrapper">
  <!-- Main Header-->
  <header class="main-header">
    <!--Header Top-->
    <div class="header-top">
      <?php if($page['header_top']) print render($page['header_top']); ?>
    </div>
    <!-- End Header Top -->

    <!--Header Lower-->
    <div class="header-lower">
      <div class="auto-container">
        <div class="main-box clearfix">
          <div class="pull-left logo-outer">
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
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
              <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                <?php print getMainMenuNVAUK(); ?>
              </div>
            </nav>
            <!-- Main Menu End-->

            <div class="outer-box">
              <!-- Shoppping Car -->
              <div class="cart-btn">
                <?php print render($page['mini_cart']) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Header Lower-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>
        <!--Right Col-->
        <div class="nav-outer pull-right">
          <!--Mobile Navigation Toggler-->
          <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
          <div class="outer-box">
            <!-- Shoppping Car -->
            <div class="cart-btn">
              <?php print render($page['mini_cart']) ?>
            </div>
          </div>

          <!-- Main Menu -->
          <nav class="main-menu">
            <div class="navbar-collapse show collapse clearfix">
              <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </div>
          </nav><!-- Main Menu End-->
        </div>
      </div>
    </div><!-- End Sticky Menu -->


    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="nav-logo">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>

        <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
      </nav>
    </div><!-- End Mobile Menu -->
  </header>
  <!--End Main Header -->

  <?php if($page['main_frontend']) print render($page['main_frontend']) ?>

  <!-- Contact Section -->
  <section class="contact-section" id="contact">
    <div class="auto-container">
      <div class="sec-title text-center">
        <h2><?php print t('Liên Hệ') ?></h2>
        <div class="text"><?php print t(''); ?></div>
      </div>
      <div class="row clearfix">
        <!-- Form Column -->
        <div class="form-column col-lg-6 col-md-12 col-sm-12 order-2">
          <?php if($page['left_contact']) print render($page['left_contact']) ?>
        </div>

        <!-- Contact Column -->
        <div class="contact-column col-lg-6 col-md-12 col-sm-12">
          <?php if($page['right_contact']) print render($page['right_contact']) ?>

        </div>
      </div>
    </div>
  </section>
  <!--End Contact Section -->

  <!-- Main Footer -->
  <footer class="main-footer style-three">
    <div class="auto-container">
      <?php if($page['footer_style_three']) print render($page['footer_style_three']); ?>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
      <?php if($page['footer_bottom']) print render($page['footer_bottom']); ?>
    </div>
  </footer>
  <!-- End Main Footer -->
</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
