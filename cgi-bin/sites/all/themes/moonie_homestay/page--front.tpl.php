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
    <!-- carousel -->
    <?php if($page['slider_content_front']) print render($page['slider_content_front'])?>
    <!-- contain main informative part of the site -->
    <main id="main">
        <?php if($page['main_content_front']) print render($page['main_content_front'])?>
    </main>

    <div class="b-container">
        <div class="google-map overlay"  onclick="style.pointerEvents='on'">
            <div class="map-responsive" id="map_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.458794720215!2d106.68160531440441!3d20.853549999113564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a8c5db84735%3A0xe5a0739583b8ed97!2zMTUgSGFpIELDoCBUcsawbmcsIEPhuqd1IMSQ4bqlLCBOZ8O0IFF1eeG7gW4sIEjhuqNpIFBow7JuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1589526446986!5m2!1svi!2s" style="border:0; pointer-events: auto" allowfullscreen></iframe>
                <!--				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.458794720215!2d106.68160531440441!3d20.853549999113564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a8c5db84735%3A0xe5a0739583b8ed97!2zMTUgSGFpIELDoCBUcsawbmcsIEPhuqd1IMSQ4bqlLCBOZ8O0IFF1eeG7gW4sIEjhuqNpIFBow7JuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1589526446986!5m2!1svi!2s" style="border:0" allowfullscreen></iframe>-->
            </div>
        </div>
        <?php if($page['footer_1']) print render($page['footer_1'])?>
        <?php if($page['sub_footer']) print render($page['sub_footer'])?>
    </div>
</div>