<?php
global $language;
$lang_name = $language->language;
if ($lang_name == 'vi'){
    $title = 'Tìm kiếm';
    $title_h2 = 'Kết quả tìm kiếm';
    $slogan = 'nơi hội tụ tinh hoa và đẳng cấp';
    $member = 'Thành viên';
    $path_member = '/vi/thanh-vien';
    $news = 'Nhận tin';
    $book = 'Đặt lịch hẹn';

    $contact = 'Liên hệ';
    $path_contact = '/vi/lien-he';

    $path_showroom = '/vi/show-room';

    $path_search = '/vi/tim-kiem-san-pham';

}elseif ($lang_name == 'en'){
    $title = 'Search';
    $title_h2 = 'Search result';
    $slogan = 'where quintessence and class converge';
    $member = 'Members';
    $path_member = '/en/members';
    $news = 'Receive news';
    $book = 'Make an appointment';

    $contact = 'Contact';
    $path_contact = '/en/contact';

    $path_showroom = '/en/show-room';

    $path_search = '/en/product-search';

}

?>

<div class="register-form white">
    <?php
    webform_node_view(node_load(90), 'full');
    print theme_webform_view(node_load(90)->content);
    ?>
    <div class="overlay-form"></div>
</div>
<div class="showroom-form white">
    <?php
    webform_node_view(node_load(94), 'full');
    print theme_webform_view(node_load(94)->content);
    ?>
    <div class="overlay-form"></div>
</div>
<header class="header">
    <div class="logo"></div>
    <nav class="navigation">
        <div class="nav">
            <?= getNavigationNoiThat() ?>
        </div>
    </nav>
    <div class="overlay-menu"></div>
    <div class="right-header">
        <?= getMenuNoiThat() ?>
        <div class="seach-top">
            <a class="search-but" href="javascript:void(0);">
                <svg
                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">
                    <path fill="currentColor"
                          d="M17.9,29.9L12,35.8c-0.9,0.9-0.9,2.4,0,3.4c0.9,0.9,2.4,0.9,3.4,0l5.9-5.9c-0.7-0.4-1.4-0.8-2-1.4C18.7,31.3,18.2,30.6,17.9,29.9z"></path>
                    <path fill="currentColor"
                          d="M37.7,13.4c-4.8-4.8-12.7-4.8-17.5,0s-4.8,12.6,0,17.4c4.8,4.8,12.7,4.8,17.5,0C42.5,25.9,42.5,18.2,37.7,13.4z M35.5,28.7c-3.7,3.7-9.6,3.7-13.3,0s-3.7-9.5,0-13.2c3.7-3.7,9.6-3.7,13.3,0C39.2,19,39.2,25,35.5,28.7z"></path>
                </svg>
            </a>
            <div class="search-form">
                <div class="form-row-search">
                    <form action="<?=$path_search?>" class="search-id-form"  method="get">
                        <input type="text" name="title" data-holder="Tìm kiếm..." value="Tìm kiếm..."
                               data-default="Tìm kiếm...">
                        <button type="submit" class="d-none">Tìm</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="language">
            <?php if ($page['lang']) print render($page['lang'])?>
            <!--            <form id="change_lang" enctype="multipart/form-data" method="post" action="index.html">-->
            <!--                <ul>-->
            <!--                    <li>-->
            <!--                        <a href="javascript:void(0);" class="en"-->
            <!--                           onclick="$('input[name=\'language_code\']').attr('value', 'en').submit();var tmp_url = document.URL;if(tmp_url=='http://v-italy.vn/'){$('input[name=\'language_code\']').attr('value', 'en').submit();$('input[name=\'redirect\']').attr('value', 'http://v-italy.vn/en/').submit();$('#change_lang').submit();return false;}else{var tmp_url_change = tmp_url.replace('/vi/', '/en/');$('input[name=\'redirect\']').attr('value', tmp_url_change).submit();;$('#change_lang').submit();return false;}">en </a>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--                <input type="hidden" value="" name="language_code">-->
            <!--                <input type="hidden" value="1" name="is_change_lang">-->
            <!--                <input id="changlanguage_redirect" type="hidden" value="http://v-italy.vn/" name="redirect">-->
            <!--            </form>-->
        </div>
    </div>
    <div class="nav-click">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">
            <rect class="rect" fill="currentColor" x="15.6" y="16.3" width="26" height="3"/>
            <rect class="rect" fill="currentColor" x="8.6" y="22.8" width="33" height="3"/>
            <rect class="rect" fill="currentColor" x="8.6" y="29.2" width="33" height="3"/>
            <path class="close-click" fill="currentColor" d="M34.7,15.9l-1.4-1.4L26.9,21c-0.9,0.9-2.3,0.9-3.3,0l-6.5-6.5l-1.4,1.4l6.5,6.5c0.9,0.9,0.9,2.3,0,3.3l-6.5,6.5
l1.4,1.4l6.5-6.5c0.9-0.9,2.3-0.9,3.3,0l6.5,6.5l1.4-1.4l-6.5-6.5c-0.9-0.9-0.9-2.3,0-3.3L34.7,15.9z"/>
        </svg>
    </div>
</header>
<main class="main">
    <div class="data-scroll">
        <div class="container" id="contact-page">
            <div class="title-page"><h1><?=$title?></h1></div>
            <section class="banner-inner">
                <div class="bg-inner"
                     style="background-image:url('/sites/all/themes/noithat/assets/pictures/catalog/background/bg5.jpg')"></div>
            </section>
            <section class="search-page">
                <div class="wrap-list grey">
                    <div class="txt-prolist ani-item on-show on-view">
                        <div class="title-main grey text-ani-item end">
                            <h2><?=$title_h2?></h2>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="search-result">
                            <div class="search-box">
                                <?= views_embed_view('taxonomy_term','page_tim_kiem_san_pham')?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <a class="hotline desktop" href="tel:0946884848">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
                <path fill="currentColor" d="M24.106,29.74c1.549,0,3.282-0.967,4.213-2.039c1.062-1.221,0.505-1.955,0.308-2.151l-3.563-3.559
c-0.272-0.271-0.634-0.422-1.02-0.422c-0.385,0-0.746,0.15-1.019,0.422l-0.128,0.127c-0.331,0.322-0.751,0.731-0.986,1.368
c-1.773-1.353-3.413-2.994-4.886-4.888c0.633-0.237,1.042-0.653,1.364-0.983l0.126-0.128c0.561-0.561,0.561-1.474,0-2.034
l-3.888-3.881c-0.599-0.598-1.452-0.521-2.281,0.21c-1.427,1.256-2.739,4.336-1.559,5.853c3.573,4.593,7.472,8.486,11.589,11.57
C22.88,29.58,23.477,29.74,24.106,29.74 M11.186,17.325h-0.002H11.186z"></path>
            </svg>
            <span>0946.884.848</span>
        </a>
        <a class="hotline desktop" href="tel:0912459882">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
                <path fill="currentColor" d="M24.106,29.74c1.549,0,3.282-0.967,4.213-2.039c1.062-1.221,0.505-1.955,0.308-2.151l-3.563-3.559
c-0.272-0.271-0.634-0.422-1.02-0.422c-0.385,0-0.746,0.15-1.019,0.422l-0.128,0.127c-0.331,0.322-0.751,0.731-0.986,1.368
c-1.773-1.353-3.413-2.994-4.886-4.888c0.633-0.237,1.042-0.653,1.364-0.983l0.126-0.128c0.561-0.561,0.561-1.474,0-2.034
l-3.888-3.881c-0.599-0.598-1.452-0.521-2.281,0.21c-1.427,1.256-2.739,4.336-1.559,5.853c3.573,4.593,7.472,8.486,11.589,11.57
C22.88,29.58,23.477,29.74,24.106,29.74 M11.186,17.325h-0.002H11.186z"></path>
            </svg>
            <span>0912.459.882</span>
        </a>
    </div>
</main>
<div class="mobile-option">
    <a class="call" href="tel:0912459882">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
            <path fill="currentColor" d="M27.1,22.8L27.1,22.8c0,0-3.1-1.7-4.4-2.7c-0.4-0.4-1.2-0.4-1.4-0.4c-0.7,0-1.1,0.5-1.1,0.5l0,0
c0,0-0.3,0.3-0.8,0.7c-0.6,0.5-1.3,0.5-1.9-0.2c-0.9-0.7-5.2-5.8-6.6-7.4c-0.3-0.4-0.5-0.7-0.5-1.1c0.1-0.7,0.9-1.2,1.2-1.5l0.1-0.1
c0.9-0.6,1-1.6,0.7-2.3c-0.3-0.4-2-4.1-2.2-4.5C9.8,3.5,9.5,3,8.6,3C8,3,5.4,4.1,5.4,4.1C4.5,4.7,3,5.8,3.1,8.1
c0.1,2.8,2.3,6.9,7,12.5c4.8,6.1,10.4,8.8,12.8,8.7c2-0.1,4-2.7,4.5-4C28,24.1,27.6,23.2,27.1,22.8z"/>
            <path fill="currentColor" d="M22.9,3.3c-2.5-0.4-4.8-0.3-7.1,0.3c-1.1,0.3-1.8,1.5-1.4,2.6l0,0c0.1,0.2,0.4,0.4,0.6,0.3
c2.5-0.9,5.2-1.1,8.1-0.5c6.1,1.4,10.7,6.6,11.3,12.8c0.8,8.7-6,16-14.5,16c-8,0-14.6-6.5-14.6-14.6c0-0.3,0-0.6,0-0.9l-0.6-0.6
c-0.7-0.7-1.9-0.3-2,0.7C2.6,22,3,24.7,4.4,27.5c2.8,5.7,8.5,9.7,14.9,9.8c10.7,0.2,19-8.8,17.7-19.4C36,10.5,30.2,4.6,22.9,3.3z"/>
        </svg>
    </a>
    <a class="showrrom-visitor" href="javascript:void(0)">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
            <path fill="currentColor" d="M34.2,20.8c-0.6-0.6-1.2-1-1.8-1.4c0,0,0,0,0-0.1c0-3.5,0-6.9,0-10.4c0-1.1-0.8-2-1.8-2.1c-0.7-0.1-1.4,0-2.1,0
c0,0.8,0,1.6,0,2.3c0,1.1-0.8,2-1.9,2.2c-0.4,0.1-0.8,0.1-1.2,0c-1.3,0-2.3-1-2.3-2.3c0-0.7,0-1.4,0-2c0-0.1,0-0.2,0-0.2
c-3.2,0-6.3,0-9.5,0c0,0.1,0,0.2,0,0.2c0,0.7,0,1.4,0,2.1c0,1.2-0.8,2.1-1.9,2.3c-0.4,0.1-0.8,0-1.1,0c-1.4,0-2.4-1-2.4-2.4
c0-0.7,0-1.3,0-2c0-0.1,0-0.2,0-0.2c-0.6,0-1.1,0-1.7,0c-1.3,0-2.2,0.9-2.2,2.3c0,6.8,0,13.7,0,20.5c0,1.3,0.9,2.2,2.2,2.2
c4.4,0,8.7,0,13.1,0c0.1,0,0.2,0,0.2,0c0,0,0-0.1,0-0.1c1.5,2.9,4.6,4.8,8,4.8h0c5,0,9.1-4.1,9.1-9.1C36.9,24.8,36,22.5,34.2,20.8z
M8.4,29c-1.1,0-1.7-0.7-1.7-1.7c0-4.2,0-8.4,0-12.7c0-0.1,0-0.2,0-0.2c7.8,0,15.6,0,23.4,0c0,1.4,0,2.7,0,4
c-0.7-0.2-1.4-0.3-2.2-0.3c-5,0-9.1,4.1-9.1,9.1c0,0.6,0.1,1.2,0.2,1.7C15.3,29,11.9,29,8.4,29z M27.8,34.2c-1.9,0-3.6-0.7-4.9-2.1
c-1.3-1.3-2-3.1-2-4.9c0-3.8,3.1-6.9,6.9-6.9h0c1.9,0,3.6,0.7,4.9,2.1c1.3,1.3,2,3.1,2,4.9C34.7,31.1,31.6,34.2,27.8,34.2z"/>
            <path fill="currentColor" d="M24.4,6.8c0-0.7,0-1.4,0-2.1c0-0.7,0.4-1,1.1-1c0.2,0,0.5,0,0.7,0c0.5,0,0.9,0.4,0.9,0.9c0,1.5,0,3,0,4.5
c0,0.5-0.4,0.9-1,1c-0.3,0-0.5,0-0.8,0c-0.6,0-1-0.4-1-1C24.4,8.2,24.4,7.5,24.4,6.8z"/>
            <path fill="currentColor" d="M12.2,6.8c0,0.7,0,1.4,0,2.1c0,0.7-0.4,1-1,1c-0.2,0-0.5,0-0.7,0c-0.5,0-1-0.4-1-0.9c0-1.5,0-3,0-4.5
c0-0.5,0.4-0.9,1-0.9c0.3,0,0.5,0,0.8,0c0.6,0,1,0.4,1,1C12.2,5.3,12.2,6,12.2,6.8z"/>
            <path fill="currentColor"
                  d="M18.3,20.5c-1.2,0-2.2-1-2.2-2.2c0-1.2,1-2.2,2.2-2.2c1.2,0,2.2,1,2.2,2.2C20.5,19.6,19.5,20.5,18.3,20.5z"/>
            <path fill="currentColor"
                  d="M11.8,27c-1.2,0-2.2-1-2.2-2.2c0-1.2,1-2.2,2.2-2.2c1.2,0,2.2,1,2.2,2.2C14,26.1,13,27,11.8,27z"/>
            <path fill="currentColor"
                  d="M11.8,20.5c-1.2,0-2.2-1-2.1-2.2c0-1.2,1-2.2,2.2-2.1c1.2,0,2.2,1,2.2,2.2C14,19.6,13,20.5,11.8,20.5z"/>
            <path fill="currentColor" d="M31.4,24c0.5,0.5,1,1,1.5,1.5c-2.1,2.1-4.1,4.1-6.2,6.2c-1.2-1.2-2.4-2.4-3.6-3.6c0.5-0.5,1-1,1.5-1.5
c0.7,0.7,1.3,1.4,2,2.1C28.3,27.2,29.9,25.6,31.4,24z"/>
        </svg>
        <span><?=$book?></span>
    </a>
    <a class="link-load" href="<?=$path_showroom?>" data-name="showroom-page">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
            <path fill="currentColor" d="M19.7,1C11.2,1,4.3,7.9,4.3,16.4c0,3.8,1.4,7.2,3.6,9.9l0,0l0,0c0.6,0.7,1.2,1.3,1.9,1.9l9.9,9.9l9.7-9.7
c3.5-2.8,5.7-7.1,5.7-11.9C35.1,7.9,28.2,1,19.7,1z M19.7,20.7c-3.7,0-6.7-3-6.7-6.7s3-6.7,6.7-6.7s6.7,3,6.7,6.7
S23.4,20.7,19.7,20.7z"/>
        </svg>
        <span>Showroom</span>
    </a>
    <a class="link-load" href="<?=$path_contact?>" data-name="contact-page">
        <svg
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
            <path fill="currentColor" d="M36.4,5.9L15,23.3L2.5,19.5L37.1,5.2l-8.1,30.6l-9.5-10.9L36.4,5.9z"/>
            <polygon fill="currentColor" points="15,23.3 15.1,34.1 19.6,24.9 "/>
            <polygon fill="currentColor" points="15.2,34 22.2,29.1 19.9,26.4 "/>
        </svg>
        <span><?=$contact?></span>
    </a>
</div>

<div class="all-pics"></div>
<div class="all-album"></div>
<div class="allvideo"></div>
<div class="overlay-dark"></div>
<div class="wheel"><span></span><span></span></div>
<div class="go-top">
    <svg viewBox="0 0 80 80">
        <path fill="currentColor" d="M54.9,49.8H25.3L40,24.1L54.9,49.8z M30.7,46.5h18.6l-9.4-16.1L30.7,46.5z"></path>
    </svg>
</div>
<div class="mask"></div>
