<?php
/**
 ** hungd
 ** 5/23/2020 2:17 PM
 ** page--lien-he.tpl.php
 ** drupal-7.65
 */
/** page lien he */
?>
<div id="wrapper">
  <!-- header -->
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php if ($logo): ?>
            <strong class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            </strong>
          <?php endif; ?>
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span></span></button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php print getMainMenu('left')?>
              <?php print getMainMenu('right')?>
            </div>
          </nav>
          <!-- main navigation -->
        </div>
      </div>
    </div>
  </header>
  <!-- banner -->
  <div class="banner"><img src="http://mooniehomestay.com/sites/default/files/banner1.jpg" alt="banner"></div>

  <!-- Navigation -->
  <div class="navigation-bar">
    <div class="container">
      <div class="row">
        <div class="col-xs-7">
          <?php if ($breadcrumb): ?>
            <div id="breadcrumb"><?php print $breadcrumb; ?></div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <main id="main">
    <div class="container">
      <div class="contact g-padding">
        <div class="row">
          <div class="col-xs-12">
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <?php if($page['left_contact']) print render($page['left_contact']) ?>
          </div>
          <div class="col-sm-6">
            <?php if($page['right_contact']) print render($page['right_contact']) ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="b-container">
    <?php if($page['footer_1']) print render($page['footer_1'])?>
    <?php if($page['sub_footer']) print render($page['sub_footer'])?>
  </div>
</div>
