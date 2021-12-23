<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
    <?php print $head; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $head_title; ?></title>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/summitknifeco.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.18"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='woocommerce-layout-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css'
          media='all'/>

    <link rel='stylesheet' id='woocommerce-smallscreen-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen%EF%B9%96ver=3.6.6.css' type='text/css'
          media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' id='woocommerce-general-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woocommerce/assets/css/woocommerce%EF%B9%96ver=3.6.6.css' type='text/css'
          media='all'/>
    <style id='woocommerce-inline-inline-css' type='text/css'>.woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='xoo-cp-style-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/added-to-cart-popup-woocommerce/assets/css/xoo-cp-style%EF%B9%96ver=1.4.css'
          type='text/css' media='all'/>
    <style id='xoo-cp-style-inline-css' type='text/css'>td.xoo-cp-pqty {
            min-width: 120px;
        }

        .xoo-cp-container {
            max-width: 650px;
        }

        .xcp-btn {
            background-color: #777777;
            color: #ffffff;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #777777;
        }

        .xcp-btn:hover {
            color: #ffffff;
        }

        td.xoo-cp-pimg {
            width: 20%;
        }

        table.xoo-cp-pdetails, table.xoo-cp-pdetails tr {
            border: 0 !important;
        }

        table.xoo-cp-pdetails td {
            border-style: solid;
            border-width: 0px;
            border-color: #ebe9eb;
        }
    </style>
    <link rel='stylesheet' id='woo-variation-swatches-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-swatches/assets/css/frontend.min%EF%B9%96ver=1.0.56.css'
          type='text/css' media='all'/>
    <style id='woo-variation-swatches-inline-css' type='text/css'>.variable-item:not(.radio-variable-item) {
            width: 30px;
            height: 30px;
        }

        .woo-variation-swatches-style-squared .button-variable-item {
            min-width: 30px;
        }

        .button-variable-item span {
            font-size: 16px;
        }


    </style>
    <link rel='stylesheet' id='woo-variation-swatches-theme-override-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-swatches/assets/css/wvs-theme-override.min%EF%B9%96ver=1.0.56.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='woo-variation-swatches-tooltip-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-swatches/assets/css/frontend-tooltip.min%EF%B9%96ver=1.0.56.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='woo-variation-gallery-slider-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-gallery/assets/css/slick.min%EF%B9%96ver=1.8.1.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='dashicons-css' href='/sites/all/themes/SparkTech/wp-includes/css/dashicons.min%EF%B9%96ver=4.9.18.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='woo-variation-gallery-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-gallery/assets/css/frontend.min%EF%B9%96ver=1.1.25.css' type='text/css'
          media='all'/>
    <style id='woo-variation-gallery-inline-css' type='text/css'>:root {
            --wvg-thumbnail-item-gap: 0px;
            --wvg-single-image-size: 600px;
            --wvg-gallery-width: 30%;
            --wvg-gallery-margin: 30px;
        }

        /* Default Width */
        .woo-variation-product-gallery {
            max-width: 30% !important;
        }

        /* Medium Devices, Desktops */

        /* Small Devices, Tablets */
        @media only screen and (max-width: 768px) {
            .woo-variation-product-gallery {
                width: 720px;
                max-width: 100% !important;
            }
        }


        /* Extra Small Devices, Phones */
        @media only screen and (max-width: 480px) {
            .woo-variation-product-gallery {
                width: 320px;
                max-width: 100% !important;
            }
        }


    </style>
    <link rel='stylesheet' id='woo-variation-gallery-theme-support-css'
          href='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-gallery/assets/css/theme-support.min%EF%B9%96ver=1.1.25.css'
          type='text/css' media='all'/>
    <!--n2css-->
    <script type='text/javascript' src='/sites/all/themes/SparkTech/wp-includes/js/jquery/jquery%EF%B9%96ver=1.12.4.js'></script>
    <script type='text/javascript' src='/sites/all/themes/SparkTech/wp-includes/js/jquery/jquery-migrate.min%EF%B9%96ver=1.4.1.js'></script>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>

    <!-- END ExactMetrics Universal Analytics -->
    <style type="text/css" id="wp-custom-css">.product-sec {
            width: 100%;
            display: inline-block;
            margin: 0 -15px;
            padding: 60px;
        }

        .product_cont {
            width: 33%;
            padding-right: 15px;
            display: inline-block;
            padding-left: 15px;
        }

        span.pdt_title {
            display: block;
            margin-top: 20px;
        }

        .product_cont a img {
            max-width: 100%;
            width: 100%;
            height: auto;
        }

        a.pdt {
            text-decoration: none;
            color: black;
        }

        .container.pdt_page {
            background: #fff;
        }

        .header_new {
            height: 100vh;
            min-height: 915px;
        }

        .wrap_container {
            background-color: #fff;
        }

        h4.con_title {
            color: black;
            border-bottom: 1px solid black;
            font-size: 36px;
            padding-bottom: 18px;
        }

        .sec_title {
            max-width: 83%;
            margin: auto;
        }

        .product_div {
            width: 100%;
            display: inline-block;
            margin: 134px 0;
            position: relative;
        }

        .product_imgsec {
            overflow: hidden;
        }

        .pro_text-bl {
            display: block;
            transform: rotate(-90deg);
            top: 100%;
            left: 10%;
        }

        .pro_text {
            position: absolute;
            white-space: nowrap;
            line-height: 0;
            transform-origin: 0 0;
        }

        .pro_text-bl {
            display: block;
            transform: rotate(-90deg);
            top: 100%;
            left: 10%;
        }

        .color-grey-lite {
            color: #d0d6d6;
        }

        .pro_text-tr {
            display: block;
            transform: rotate(90deg);
            top: 0;
            left: 90%;
        }

        .media_sec {
            width: 100%;
            left: 0;
            height: auto;
            display: block;
        }

        .product_div_lg {
            margin-top: 72px;
        }

        .product_div h1, h2 {
            font-weight: 400;
            font-style: normal;
            margin-top: 0;
            margin-bottom: 0;
            font-size: 48px;
        }

        .daily_con {
            color: black;
            padding-top: 17px;
        }

        shop-mainsec {
            display: flex;

        }

        .shop_img_sec {
            position: relative;
            padding: 0 15px;
            width: 50%;
        }

        .story-gallery img {
            display: block;
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .shop-now-overlay, .shop-now-overlay:before {
            display: block;

            top: 0;
            bottom: 0;
        }

        .shop-now-overlay span {
            position: absolute;
            bottom: 18px;
            right: 18px;
        }

        .btn--small {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .btn {
            font-family: nb_akademie_stdblack, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 18px;
            -ms-flex-align: center;
            align-items: center;
            color: #707a7a;
            cursor: pointer;
            display: -ms-inline-flexbox;
            display: inline-flex;
            line-height: 1;
            margin: 0;
            padding: 0;
            position: relative;
            transition: .5s ease;
            white-space: nowrap;
            background: transparent;
            -webkit-appearance: none;
            border: none;
        }

        .shop-now-overlay:before {
            content: "";
            left: 0;
            right: 0;
            opacity: 0;
            transition: 2s cubic-bezier(.15, .6, .14, .99);
        }

        .shop-now-overlay.with-white .btn {
            color: #fff;
        }

        .shop-mainsec {
            display: flex;
        }

        .container.custom_sec {
            padding-top: 100px;
        }

        #custom_img {
            padding: 200px 0px;
            background-size: cover;
            height: 800px;
        }

        ul {
            list-style: none
        }

        .one {
            width: 50%;
            float: left
        }

        .two {
            width: 50%;
            float: right
        }

        .span {
            font-weight: 400;
            font-style: normal;
            text-transform: uppercase;
            color: #707a7a;
            letter-spacing: 2px;
            padding: 50px 0 0 50px;
            margin-top: 10px
        }

        .p {
            font-size: 24px;
            font-family: nb_akademie_stdbold, sans-serif;
            font-weight: bold;
            font-style: normal;
            padding: 0 50px;
            color: black;
        }

        .img-right {
            overflow: hidden;
            position: relative;
            right: 0;
            width: 83%;
        }

        h1.pro_text.pro_text-tr.color-black.fd {
            color: black;
        }

        .media {
            width: 100%;
            display: block;
        }


        .img-left {
            overflow: hidden;
            position: relative;
            left: 16.66667%;
            width: 83%;
        }

        .img-right {
            overflow: hidden;
            position: relative;
            right: 0;
            width: 83%;
        }

        .img-left img {
            width: 100%;
            height: auto;
        }

        .img-right img {
            width: 100%;
            height: auto;
        }

        h1.pro_text {
            color: black;
        }

        section.story__image.img-right_story .product_div {
            margin-top: 0;
        }

        .daily_con {
            font-size: 22px;
            max-width: 81.66666%;
        }

        #multiple_img {
            background-size: cover;
            height: 768px;
            margin-top: 100px;
        }

        .image_text {
            color: #d0d6d6;
        }

        .daily_con_title {
            color: black;
            font-size: 36px;
        }

        h1.pro_text {
            color: black;
            font-size: 60px;
        }

        h4.con_title {
            border-bottom: 2px solid #d0d6d6;
            font-weight: 200;
            font-size: 15px;
            padding-bottom: 18px;
        }

        .header_new {
            background-size: cover;
            background-repeat: no-repeat;
        }

        .conttable-sec {
            margin-top: 80px;
        }

        /*======================*/
        .pro_text-bl .product_div_lg {
            margin-top: 72px;
            margin-left: 70PX;
        }

        .pro_text-tr .product_div_lg {
            margin-top: 72px;
            margin-left: -67PX;
        }

        .conttable-sec {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .conttable-text {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .xsmall {
            font-family: nb_akademie_stdregular, sans-serif;
            font-weight: 400;
            font-style: normal;
            text-transform: uppercase;
            color: #707a7a;
            letter-spacing: 2px;
        }

        .mb2 {
            margin-bottom: 36px;
        }


        .conttable-text p.h4 {
            color: #000;
            font-size: 24px;
        }

        .span {

            padding: 50px 0 0 0px !important
        }

        .p {
            padding: 0 0;
        }

        section#custom_detail_img {
            background-position: 50%;
            height: 800PX;
            background-size: contain;
            background-repeat: no-repeat;
        }

        span.pdt_title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .product_cont {
            text-align: center;
        }

        .product-sec {

            margin: 0 !important;
        }

        #custom_img {
            margin-top: 80px;
            background-size: cover;
            background-position: top center;
        }

        @media (max-width: 1024px) {

            section#custom_detail_img {
                height: 500PX;
            }

            h1.pro_text {
                color: black;
                font-size: 40px;
            }
        }

        @media (max-width: 767px) {
            .pro_text-tr .product_div_lg {
                margin-top: 23px;
                margin-left: -40PX;
            }

            p.price {
                display: none;
            }

            h1.product_title.entry-title {
                display: none;
            }

            button.btn.btn--lighter.single_add_to_cart_button.button.alt {
                float: none !important;
                width: 100% !important;
                margin-left: 12px;
            }

            .pro_text-bl .product_div_lg {
                margin-top: 26px;
                margin-left: 40PX;
            }

            #custom_img {
                padding: 20px 0;
                background-size: contain !important;
                background-repeat: no-repeat;
                background-position: top center;
                width: 100%;
            }

            .product-sec {
                padding-bottom: 50px !important;
            }

            #multiple_img {
                margin-top: 42px;
            }

            .product-sec {
                margin: 0;
            }

            #custom_img {

                height: 175px;
            }

            .product_cont {
                width: 100%;
            }

            .product-sec {
                width: 100%;
                padding: 0;
            }

            .p {
                font-size: 16px;
            }

            section#custom_detail_img {
                height: 175PX;
            }

            .header_new {
                min-height: 166px;

            }

            .header__cell.header__cell--logo a.logo svg {
                height: 40px !important;
            }

            h1.pro_text {
                color: black;
                font-size: 20px;
            }

            .product_div_lg {
                margin-top: 20px;
                font-size: 20px;
            }

            .pro_text-bl {
                left: 5%;
            }

            .pro_text-tr {
                left: 95%;
            }

            .product_div {
                margin: 47px 0;
            }

            .container.custom_sec {
                padding-top: 33px;
            }

            .daily_con_title {
                color: black;
                font-size: 25px;
            }

            .daily_con {
                font-size: 17px;
                max-width: 100%;
            }

            .sec_title {
                max-width: 100%;
            }

            .shop_img_sec {
                width: 100%;
            }

            .shop-mainsec {
                display: inline-block;
            }

            .shop_img_sec {
                margin-bottom: 20px;
            }

            #custom_img {
                padding: 20px 0;
                background-size: contain;
                background-repeat: no-repeat;
            }

            #multiple_img {
                height: 182px;
            }

            h1.pro_text {
                color: black;
                font-size: 15px;
            }

            .p {
                font-size: 12px;
            }

            .span {
                padding: 0px !important;
                font-size: 13px;
            }

            .xsmall {
                font-size: 12px;
            }

            .conttable-text p.h4 {
                color: #000;
                font-size: 12px;
            }

            .thumbnails li {
                margin: 0;
                padding: 0;
                text-indent: inherit !important;
            }
        }

        .woocommerce-Price-amount.amount:hover {
            color: black;
        }

        span.woocommerce-Price-amount.amount {
            color: white;
        }

        /*=========================*/
        .header_new {
            background-size: cover;
            background-repeat: no-repeat;
            background-size: cover !important;
            background-position: top center !important;
        }

        #custom_img {
            height: 220px;
        }

        .story-gallery img {
            height: 200px;
        }

        }
        #custom_img {
            margin-top: 80px;
        }

        .header_product .hmenu li > a {
            line-height: 80px;
            height: 80px;
            color: black;
        }

        /*.header_product .hsmenu a {
            color: black;
        }
        .black_class {
            color: black !important;
        }
        .summary p {
            color: black;
        }
        .mw940 h1{
            color:black;
        }
        /*.section__bg{
            background:white !important;
          background-image: none !important;
        }*/
        .params .params__inner .param__title {
            color: black !important;
        }

        .params .params__inner .param__content {
            color: black !important;
        }

        /******** 23-24-2019(GG)*********/
        span.starting_price {
            color: #707a7a;
            margin-left: 20px;
            font-size: 14px;
        }

        h4.ellis_heading {
            color: black;
            margin-top: 20px;
        }

        .product_div {
            display: block;
            width: 100%;
        }

        .shop_sec_right {
            width: 50%;
            float: left;
        }


        .shop_sec_left {
            width: 33.33%;
            float: right;
        }

        .offset-1\@lg {
            margin-left: 8.33333%;
        }

        .display-block\@lg {
            display: block;
        }

        .product__review-count {
            margin: 10px 0;
        }

        .mb2 {
            margin-bottom: 36px;
        }

        .cartbar .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }


        .cartbar .col {
            position: relative;
            padding-left: 18px;
            padding-right: 18px;
            -ms-flex: 1;
            flex: 1;
            max-width: 100%;
        }

        .product__price {
            font-size: 24px;
            font-weight: 400;
            font-style: normal;
            letter-spacing: 2px;
            line-height: 1;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .text-right {
            text-align: right;
        }

        #add-to-cart {
            font-size: 24px;
            padding: 9px 0;
            color: #b0d80a;
        }

        .btn--primary, .btn--primary:hover {
            color: #b0d80a;
        }

        .btn {
            font-family: nb_akademie_stdblack, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 18px;
            -ms-flex-align: center;
            align-items: center;
            color: #707a7a;
            cursor: pointer;
            display: -ms-inline-flexbox;
            display: inline-flex;
            line-height: 1;
            margin: 0;
            padding: 0;
            position: relative;
            transition: .5s ease;
            white-space: nowrap;
            background: transparent;
            -webkit-appearance: none;
            border: none;
        }

        .display-none\@lg {
            display: none;
        }

        .product__swatches {
            overflow: visible;
            margin-left: -10px;
            margin-bottom: 24px;
            list-style: none;
            padding: 0;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }


        .product__swatches {
            overflow: visible;
            margin-left: -10px;
            margin-bottom: 24px;
        }

        .product__swatches {
            list-style: none;
            padding: 0;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        .product__swatches li {
            display: inline-block;
            margin: 0;
            cursor: pointer;
        }

        .product__swatches label {
            display: block;
            padding: 9px;
            cursor: pointer;
            margin: 15px 0;
        }

        .color-grey {
            color: #707a7a;
        }

        .product__swatches input {
            display: none;
        }

        .product__swatches .radio.blade-shape, .product__swatches .radio.blade-type, .product__swatches .radio.color {
            background-color: #fff;
            background-size: 22px;
            background-position: 50%;
            background-repeat: no-repeat;
        }

        .product__swatches .radio {
            background-color: #000;
            border-radius: 50%;
            border: 3px solid #fff;
            color: transparent;
            cursor: pointer;
            display: block;
            width: 20px;
            height: 20px;
            position: relative;
        }

        .font-black {
            font-weight: 400;
            font-style: normal;
        }

        .product__swatches input:checked + .radio:before {
            transform: scale(1);
        }

        .product__swatches .radio:before, .selected .product__swatches .radio {
            content: " ";
            background: #b0d80a;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            position: absolute;
            top: -6px;
            left: -6px;
            z-index: -1;
            transition: 245ms ease;
            transform: scale(0);
        }

        .product__swatches input:checked ~ .label {
            display: block;
        }

        .product__swatches input:checked ~ .label {
            display: block;
        }

        .product__swatches .label {
            position: absolute;
            left: 11px;
            top: -22px;
            display: none;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .product__swatches .radio {
            background-color: #000;
            border-radius: 50%;
            border: 3px solid #fff;
            color: transparent;
            cursor: pointer;
            display: block;
            width: 20px;
            height: 20px;
            position: relative;
        }

        .product__swatches input:checked + .radio:before {
            transform: scale(1);
        }

        .product__swatches .radio:before, .selected .product__swatches .radio {
            content: " ";
            background: #b0d80a;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            position: absolute;
            top: -5px;
            left: -6px;
            z-index: -1;
            transition: 244ms ease;
            transform: scale(0);
        }

        .product__swatches input {
            display: none;
        }

        .product__swatches .label {
            position: absolute;
            right: 0;
            top: -2px;
            display: none;
        }

        span.radio.blade-shape:before {
            content: " ";
            background: #b0d80a;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            position: absolute;
            top: -6px;
            left: -6px;
            z-index: -1;
            transition: 245ms ease;
            transform: scale(0);
        }

        .color-grey {
            text-transform: uppercase;
            color: #707a7a;
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
        }

        input[type="radio"] {
            margin: 3px 3px 0px 5px;
        }

        input[type="radio"] {
            /*-webkit-appearance: radio;*/
            box-sizing: border-box;
        }

        input[type="radio"], input[type="checkbox"] {
            background-color: initial;
            cursor: default;
            margin: 3px 0.5ex;
            padding: initial;
            border: initial;
        }

        input {
            padding: 1px 0px;
        }

        input {
            /* -webkit-appearance: textfield;*/
            background-color: white;
            -webkit-rtl-ordering: logical;
            cursor: text;
            padding: 1px;
            border-width: 2px;
            border-style: inset;
            border-color: initial;
            border-image: initial;
        }

        input, textarea, select, button {
            text-rendering: auto;
            color: initial;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            margin: 0em;
            font: 400 13.3333px Arial;
        }

        /********** For slider*****/
        ul {
            list-style: none outside none;
            padding-left: 0;
            margin: 0;
        }

        .demo .item {
            margin-bottom: 60px;
        }

        .content-slider li {
            background-color: #ed3020;
            text-align: center;
            color: #FFF;
        }

        .content-slider h3 {
            margin: 0;
            padding: 70px 0;
        }

        .demo {
            width: 800px;
        }

        .product_div {
            margin: 125px 0 !important;
        }

        /*========26-april=========*/
        body.white_body {
            background: #fff !important;
            color: #333;
        }

        .white_body .header {
            position: absolute !important;
        }

        .header_new img {
            max-width: 100%;
            object-fit: cover;
            width: 100%;
        }


        section#custom_img img {
            max-width: 100%;
            width: 100%;
            height: auto;
            display: block;
        }

        #multiple_img img {
            max-width: 100%;
            width: 100%;
            height: auto;
            display: block;
        }

        .header_new {
            height: auto !important;
            width: 100%;
            display: table;
        }

        #multiple_img {
            width: 100%;
            display: table;
        }

        #custom_img {
            padding: 100px 0px;
            margin-top: 0;
            width: 100%;
            display: table;
        }

        .wrap_container {
            background-color: #fff;
            width: 100%;
            display: table;
        }

        section.story__image {
            width: 100%;
            display: table;
        }

        .product_div {
            margin: 20px 0;
        }

        .n2-section-smartslider {
            width: 100%;
            display: table;
            padding-top: 127px;
        }

        section#custom_detail_img {
            width: 100%;
            display: table;
            height: auto;
            padding-top: 70px;
        }

        section#custom_detail_img img {
            width: 100%;
            max-width: 100%;
            height: auto;
        }

        section.product_shop_page {
            margin: 218px 0 !important;
        }

        .hmenu li > a:hover {
            color: #000;
        }

        .header_product .hmenu li > a:hover {
            color: #072232 !important;
        }

        .header_product .hsmenu a {
            text-decoration: none;
            color: #072232;
        }

        #img_imp1 {
            width: 83% !important;
        }

        #img_imp2 {
            width: 83% !important;
        }

        div#wooswipe {
            margin-top: 160px;
        }

        .variable-items-wrapper [data-wvstooltip]:active:after, .variable-items-wrapper [data-wvstooltip]:active:before, .variable-items-wrapper [data-wvstooltip]:focus:after, .variable-items-wrapper [data-wvstooltip]:focus:before, .variable-items-wrapper [data-wvstooltip]:hover:after, .variable-items-wrapper [data-wvstooltip]:hover:before {
            visibility: hidden;
        }

        .single_variation_wrap .quantity {
            display: none !important;
        }

        .product_meta {
            display: none;
        }

        .variable-item:not(.radio-variable-item) {
            width: 200px;
            height: 30px;
        }

        h1.product_title.entry-title {
            color: black;
            margin-top: 80px;
        }

        /*h2.pdt_title {
            color: black;
        }*/
        .woocommerce-message {
            display: none;
        }

        a.reset_variations {
            display: none;
        }

        .woocommerce-Price-amount.amount:hover {
            display: none;
        }

        /*button.btn.btn--lighter.single_add_to_cart_button.button.alt {
            width: 45%;
            float: right;
        }*/
        label.dot:after {
            content: '';
            width: 12px;
            height: 12px;
            background: black;
            position: absolute;
            top: 4px;
            left: 4px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        ul.checkbox_sec.variable-items-wrapper.button-variable-wrapper li label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 18px;
            height: 18px;
            border: 1px solid #ddd;
            border-radius: 100%;
            background: #fff;
        }

        table.variations.shop_sec_left {
            margin-top: 60px;
        }

        button.btn.btn--lighter.single_add_to_cart_button.button.alt {
            float: right;
            width: 44%;
        }

        img.attachment-shop_single.size-shop_single.wp-post-image.wp-post-image {
            height: auto !important;
        }

        div#wooswipe {
            margin-left: 50px;
        }

        .slick-track {
            width: 100% !important;
            left: 0 !important;
        }

        h1.product_title.entry-title {
            color: white;
        }

        .pdt_title {
            color: black;
        }

        span.woocommerce-Price-amount.amount {
            color: black;
            font-size: 20px;
        }

        .custom_btn {
            position: relative;
            display: inline-block;
            outline: none;
            text-decoration: none;
            text-transform: uppercase;
            text-align: center;
            font-family: "Barlow Condensed", Tahoma, Helvetica, sans-serif;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 0;
            border: none;
            vertical-align: middle;
            white-space: nowrap;
            line-height: 60px;
            height: 60px;
            min-width: 60px;
            border-radius: 0;
            color: black !important;
            -webkit-appearance: none;
            background: white;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            cursor: pointer;
        }

        .input-spin {
            width: 0% !important;
        }

        span.woocommerce-Price-amount.amount {
            color: inherit;
        }

        button#btn_update {
            color: black;
        }

        button.btn.btn--lighter.single_add_to_cart_button.button.alt {
            color: black !important;
            opacity: 1 !important;
        }

        #scrollbtind, #scrolltoprd, #scrolltotop {
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        /***************18-05-2019****/

        .btn.btn-info {
            height: auto;
            background: #777777;
            border-color: #777777;
        }

        .modal-footer button.btn.btn-default {
            height: auto;
            color: white !important;
            background: #777;
        }

        .pro_text-tr .product_div_lg {
            margin-top: 66px;
            margin-left: -18PX !important;
        }

        .pro_text-bl .product_div_lg {
            margin-top: 72px;
            margin-left: 26PX !important;
        }

        @media (max-width: 992px) {

            h1.pro_text {
                color: black;
                font-size: 40px;
            }
        }

        /*savita*/
        .container.custom_sec .section.scroll-activate.scroll-activate-trigger.scroll-active {
            padding: 0 0 !important;
        }

        div#product-366 {
            max-width: 85%;
            margin: auto;
            width: 100%;
        }

        @media (max-width: 767px) {
            div#product-366 {
                max-width: 100%;
                margin: auto;
                width: 100%;
                padding: 0 20px;
            }

            table.variations.shop_sec_left {
                margin-top: 0px;
            }

            .summary {

                margin-top: 0;
            }

            div#wooswipe {
                margin-left: 0;
            }

            .slick-list.draggable {
                padding: 0 20px;
            }

            h1.pro_text {
                color: black;
                font-size: 21px;
                margin-left: -8px;
                margin-top: 15px;
            }

            .pro_text {
                display: block;
            }


            .pro_text-tr .product_div_lg {
                margin-top: 40px;
            }

            .pro_text-bl .product_div_lg {
                margin-top: 24px;
                margin-left: 7PX;
            }

            .pro_text-tr {
                left: 96%;
            }

            .product_div .media h1 {
                margin-left: 6px;
            }

            section.story__image.img-right_story h1.pro_text.pro_text-tr.color-black.fd {
                margin-left: -13px;
            }

            section.story__image.img-right_story .product_div {
                margin: 20px 0;
            }

            .product_div {
                margin: 48px 0 !important;
            }
        }
    </style>
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/sites/all/themes/SparkTech/wp-content/themes/summit/build/build.css" type="text/css" media="all"/>
    <script src="/sites/all/themes/SparkTech/wp-content/themes/summit/build/build-head.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="/sites/all/themes/SparkTech/assets/js/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/sites/all/themes/SparkTech/assets/js/owl-carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/sites/all/themes/SparkTech/wp-content/themes/summit/style.css" type="text/css" media="all"/>
    <?php print $styles; ?>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<script src="/sites/all/themes/SparkTech/wp-content/themes/summit/build/build.js"></script>
<script src="/sites/all/themes/SparkTech/wp-content/themes/summit/js/template.js"></script>

<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min%EF%B9%96ver=2.70.js'></script>

<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min%EF%B9%96ver=3.6.6.js'></script>
<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min%EF%B9%96ver=2.1.4.js'></script>

<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min%EF%B9%96ver=3.6.6.js'></script>

<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min%EF%B9%96ver=3.6.6.js'></script>

<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/added-to-cart-popup-woocommerce/assets/js/xoo-cp-js.min%EF%B9%96ver=1.4.js'></script>
<script type='text/javascript' src='/sites/all/themes/SparkTech/wp-includes/js/underscore.min%EF%B9%96ver=1.8.3.js'></script>

<script type='text/javascript' src='/sites/all/themes/SparkTech/wp-includes/js/wp-util.min%EF%B9%96ver=4.9.18.js'></script>

<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min%EF%B9%96ver=1.0.56.js'></script>
<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-gallery/assets/js/slick.min%EF%B9%96ver=1.8.1.js'></script>
<script type='text/javascript' src='/sites/all/themes/SparkTech/wp-includes/js/imagesloaded.min%EF%B9%96ver=3.2.0.js'></script>

<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/woo-variation-gallery/assets/js/frontend.min%EF%B9%96ver=1.1.25.js'></script>
<script type='text/javascript' src='/sites/all/themes/SparkTech/wp-includes/js/wp-embed.min%EF%B9%96ver=4.9.18.js'></script>

<script type='text/javascript'
        src='/sites/all/themes/SparkTech/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min%EF%B9%96ver=4.5.0.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script src="/sites/all/themes/SparkTech/assets/js/owl-carousel/dist/owl.carousel.min.js"></script>
<?php print $scripts; ?>

</body>
</html>
