<!doctype html>
<html lang="<?php print $language->language; ?>">
<head>
  <?php print $head; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta charset="utf-8">
    <meta name="google-site-verification" content="fbAo2GO7WV_ofBS-n4LT8Da4z8LxLKcuS0Y0xYNu4pw" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&amp;display=swap" rel="stylesheet">

  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <div class="hotlinefix">
      <span class="phone"><a href="tel:0942445269">0942.445.269</a></span>

      <div class="circle-hotline">
          <span><a href="tel:0942445269"><img src="https://nhomkinhhungphat.com/sites/all/themes/nhomkinh/assets/images/hotline.png"></a>
          </span>
      </div>
  </div>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CLFDSG1CKR"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-CLFDSG1CKR');
  </script>
</body>
</html>
