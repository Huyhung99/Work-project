<!doctype html>
<html lang="<?php print $language->language; ?>">
<head>
  <?php print $head; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta charset="utf-8">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>--><![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <div class="hotlinefix">
    <span class="phone"><a href="tel:0936809468">0936.809.468</a></span>
    <a href="tel:0936809468">
      <div class="circle-hotline">
          <span><img src="https://nhomkinhhungphat.com/sites/all/themes/nhomkinh/assets/images/hotline.png" title="Gạch Xuân Đức" alt="Gạch Xuân Đức">
          </span>
      </div>
    </a>
  </div>
</body>
</html>
