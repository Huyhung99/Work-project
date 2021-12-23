<?php global $language?>
<?php if ($language->language == 'en'){
    $path_form = '/search';
    $placeholder = 'Search...';
    $title_col_2_footer = 'LINKS';
    $title_col_3_footer = 'LOCATION';

}else{
    $path_form = '/tim-kiem';
    $placeholder = 'Tìm kiếm';
    $title_col_2_footer = 'LIÊN KẾT';
    $title_col_3_footer = 'ĐỊA CHỈ';


}?>

<div class="top-bar-area bg-dark text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-3 shape">
                <?php if ($page['lang']) print render($page['lang'])?>
            </div>
            <div class="col-lg-9 info float-right text-right d-none d-sm-block">
                <?php if ($page['right-header']) print html_entity_decode(render($page['right-header']))?>
            </div>
        </div>
    </div>
</div>
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <form method="get" action="<?=$path_form?>">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="<?=$placeholder?>" name="title">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Partners Law'); ?>" rel="Partners Law" id="logo" class="navbar-brand">
                        <img class="img-fluid" src="<?php print $logo; ?>" alt="<?php print t('Partners Law'); ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <?= getMainMenu()?>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->
</header>
<?php if ($page['main_frontend']) print render($page['main_frontend']) ?>

<?php if ($page['about-us']) print html_entity_decode(render($page['about-us']))?>

<?php if ($page['main_frontend2']) print render($page['main_frontend2'])?>

<footer class="bg-dark text-light">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">

                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <?php if ($page['col1_footer']) print html_entity_decode(render($page['col1_footer']))?>

                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 single-item offset-lg-1">
                    <div class="f-item link">
                        <h4 class="widget-title"><?=$title_col_2_footer?></h4>
                        <?php print getMenuFooter()?>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="f-item opening-hours">
                        <h4 class="widget-title"><?=$title_col_3_footer?></h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7042801166244!2d106.66963731478668!3d10.833927692282554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175297d7a923f99%3A0x9597fe90851745ad!2sPartners%20Law!5e0!3m2!1svi!2s!4v1637291247281!5m2!1svi!2s" width="100%" height="262" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- Fixed Shape -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; 2021. Designed by <a target="_blank" href="//minhhien.com.vn">MinhHien Solutions</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->

    <div class="fixed-shape">
        <img src="/sites/all/themes/Partners/assets/img/shape/footer-shape.png" alt="Shape">
    </div>
    <!-- End Fixed Shape -->
</footer>

