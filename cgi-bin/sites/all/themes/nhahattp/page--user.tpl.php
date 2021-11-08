<?php if(!$logged_in): ?>
<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <?php print render($page['content']); ?>
    </div>
</div>
<?php else: ?>
  <!-- Header Area Start -->
  <header class="header-area fixed header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-xs-12">
          <div class="logo">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          </div>
        </div>
        <div class="col-md-9 hidden-xs">
          <?php if ($page['header_top']) print html_entity_decode(render($page['header_top']))?>
          <!-- Mainmenu Start -->
          <div class="main-menu hidden-xs pull-right">
            <nav>
              <?php print getMainMenuFLC()?>
            </nav>
          </div>
          <!-- Mainmenu End -->
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <?php print getMainMenuFLC()?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Area end -->
  </header>
  <section class="breadcrumb-area overlay-dark-2 bg-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumb-text text-center">
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
            <div class="breadcrumb-bar">
              <ul class="breadcrumb">
                <?php if ($breadcrumb): ?>
                  <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="room-area pt-90 room-grid">
    <div class="container">
      <div class="row">
        <?php
        $col = 12;
        if ($page['sidebar_first']){
          $col = 9;
        }?>
        <div class="col-md-<?=$col?> col-lg-<?=$col?>">
          <?php print $messages; ?>
          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
        <?php if($page['sidebar_first']):?>
          <div class="col-md-3">
            <?php print render($page['sidebar_first'])?>
          </div>
        <?php endif;?>
      </div>
    </div>
  </section>
  <footer class="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget-area bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-xs-12">
            <?php print getNodeContent(14) ?>
          </div>
          <div class="col-md-3 col-xs-12">
            <?php print getNodeContent(15) ?>
          </div>
          <div class="col-md-4 col-xs-12">
            <?php print getNodeContent(16) ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Widget End -->
    <!-- Footer Bottom Area Start -->
    <?php if($page['footer']) print str_replace('2020', date("Y"), render($page['footer']))?>

    <!-- Footer Bottom Area End -->
  </footer>

<?php endif; ?>
