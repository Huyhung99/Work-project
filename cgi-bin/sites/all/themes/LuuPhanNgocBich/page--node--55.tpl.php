<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<?php print render($page['content']['metatags']); ?>
<div id="page" class="page">
    <header id="header" class="header">


        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"  class="img-fluid"/>
                </a>
            <?php endif; ?>
            <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
        </div>


        <!-- HEADER STRIP -->

        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">

                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="desktoplogo"><?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"  class="img-fluid"/>
                        </a>
                    <?php endif; ?></div>

                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <?php print getMainMenuPhuongNguyenGrp(); ?>
                </nav>	<!-- END MAIN MENU -->

            </div>
        </div>	<!-- END NAVIGATION MENU -->


    </header>	<!-- END HEADER -->
    <section class="intro-coaching">
        <div class="img-intro-coaching">
            <img src="/sites/default/files/coaching1.jpg" class="img-fluid" title="Phan Lưu Ngọc Bích" alt="Phan Lưu Ngọc Bích"/>
        </div>
        <div class="content-intro-coaching">
            <div class="title-intro-coaching">
                <span>PHAN LƯU NGỌC BÍCH</span>
                <h6>Coaching nghề nghiệp và Mối quan hệ</h6>
                <h2>Giúp Bạn Đi Sâu Vào Nội Tâm Để Giải Quyết Vấn Đề</h2>
                <p><a class="btn-coaching">TÌM HIỂU THÊM <i class="fas fa-arrow-right"></i></a></p>
            </div>
            <div class="desire-intro-coaching">
                <div class="detail-desire bgc-gray1">
                    <span>Cải Thiện Mối Quan Hệ</span>
                    <p>Mong muốn có những mối quan hệ thấu hiểu, yêu thương và triển nở hơn về tâm hồn.</p>
                    <a class="btn-coaching">Bắt đầu ngay</a>
                </div>
                <div class="detail-desire bgc-gray2">
                    <span>Xây Dựng Nghề Nghiệp</span>
                    <p>Mong muốn có lựa chọn nghề nghiệp phù hợp, tìm ra con đường đam mê dẫn lối đến thành công.</p>
                    <a class="btn-coaching">Bắt đầu ngay</a>
                </div>
            </div>
        </div>
        <div class="divider-bottom bgc-orange"></div>
    </section>
    <section class="detail-coaching">
        <div class="item-detail-coachinh bgc-yellow1">
            <span><i class="fas fa-bullseye"></i></span>
            <h3 class="h4">Thiết lập mục tiêu</h3>
            <p class="text-center mb-20">Việc đầu tiên để bắt đầu bạn cần có mong muốn và mục tiêu rõ ràng</p>
            <p class="container-button"><a href="#"  class="btn-readmore">Đọc thêm</a></p>
        </div>
        <div class="item-detail-coachinh bgc-yellow2">
            <span><i class="fas fa-user-friends"></i></span>
            <h3 class="h4">Cải Thiện Quan Hệ</h3>
            <p class="text-center">Mọi mối quan hệ đều có thể được hàn gắn và chữa lành</p>
            <p class="container-button"><a  href="#" class="btn-readmore">Đọc thêm</a></p>
        </div>
        <div class="item-detail-coachinh bgc-yellow3">
            <span><i class="fas fa-heart"></i></span>
            <h3 class="h4">Quản Trị Stress</h3>
            <p class="text-center">Kiểm soát căng thẳng, áp lực để cuộc sống hạnh phúc hơn</p>
            <p class="container-button"><a  href="#" class="btn-readmore">Đọc thêm</a></p>
        </div>
        <div class="item-detail-coachinh bgc-yellow4">
            <span><i class="fas fa-briefcase"></i></span>
            <h3 class="h4">Tư Vấn Nghề Nghiệp</h3>
            <p class="text-center">Tuổi trẻ chẳng hai lần thắm lại, theo đuổi đam mê thành công sẽ đến</p>
            <p class="container-button"><a href="#" class="btn-readmore">Đọc thêm</a></p>
        </div>
        <div class="divider-bottom bgc-white"></div>
    </section>
    <section class="w-coaching">
        <div class="item-w-coaching bgc-gray3">
            <h3 class="h1">Coaching Là Gì?</h3>
            <p>Theo định nghĩa của ICF (Liên đoàn Huấn luyện viên Quốc tế), Coaching (tạm dịch là “kèm cặp, huấn luyện, khai vấn”)  là “hợp tác với khách hàng trong một quá trình khơi gợi tư duy và óc sáng tạo, mà từ đó truyền cảm hứng giúp khách hàng phát huy tối đa tiềm năng của mình trong cuộc sống cá nhân cũng như trong công việc.”</p>
        </div>
        <div class="item-w-coaching bgc-gray4">
            <h3 class="h1">Ai Sẽ Cần Coaching?</h3>
            <p>Bạn mong muốn mỗi ngày thức dậy tràn đầy cảm hứng và năng lượng nhưng có quá nhiều rào cản khiến bạn cứ mãi loay hoay trong những vấn đề và trở nên bế tắc, chán nản, tuyệt vọng. Bạn khao khát làm một điều gì đó khác biệt nhưng lại không biết nó là gì và làm sao để đến được đó? Vậy đó là lúc bạn cần đến Coaching rồi đấy!</p>
        </div>
        <div class="divider-bottom bgc-white"></div>
    </section>
    <section class="p-coaching">
        <div class="content-p-coaching item-p-coaching">
            <h3 class="h1 text-right">Quá trình như thế nào ?</h3>
            <p class="text-right">Coaching là về sự học hỏi – không phải là sự dạy dỗ. Bạn là chuyên gia cho chính cuộc đời mình. Người coach trợ giúp bạn đạt được những khám phá sâu sắc hơn về mặt nhận thức.</p>
            <p class="text-right">Coaching là về hành động – hành động của bạn. Bạn sẽ ngạc nhiên thấy mình nhanh chóng tiến tới việc đạt được các mục tiêu như thế nào. Và bạn sẽ cần đồng hành với coach một quá trình.</p>
        </div>
        <div id="accordion" class="item-p-coaching">
            <div class="card">
                <div class="card-header bgc-card-gray" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-gray-card pl-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            1. Đầu tiên bạn cần có mong muốn rõ ràng
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse  collapse-card bgc-card-gray" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body bgc-card-gray">
                        <p class="text-justify">Mọi thứ đều bắt đầu từ chính bạn. Cuộc sống này là của bạn và chẳng ai sống thay được. Vì thế sẽ chẳng ai giúp được bạn nếu như bạn chẳng biết mình muốn gì. Bạn có thể bế tắc nhưng bạn cần có mong muốn. Người coach sẽ chỉ giúp được bạn khi bạn có mong muốn, bất kể mong muốn đó là gì.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bgc-card-gray1" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-gray-card pl-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. Bạn cần nói chuyện với coach trước khi ra quyết định
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse collapse-card" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body bgc-card-gray1">
                        <p>Vì sao lại cần làm điều này? Bạn và coach cần cảm nhận có sự kết nối về mặt năng lượng, khi đó quá trình coaching mới đem lại hiệu quả. Nếu một trong hai cảm thấy không thoải mái khi nói chuyện thì nên dừng lại và coach có thể giới thiệu cho bạn vài người coach khác để bạn nói chuyện thử trước khi đưa ra quyết định lựa chọn ai là người coach cho mình.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bgc-card-gray2" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-gray-card pl-0 " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. Cam kết 100% hết mình cho sự thay đổi
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse  collapse-card" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body bgc-card-gray2">
                        <p class="text-justify">Để có được điều mình muốn bạn cần thật sự rất nghiêm túc với chính mình. Sẽ có rất nhiều tiếng nói nhỏ ở bên trong kéo bạn lại, làm cho bạn trì hoãn trong hành động. Bạn cần có ý chí và sự cam kết vượt qua rào cản đó để thực hành những gì bạn nhận ra sau phiên coaching. Tại phiên coach bạn thông suốt vấn đề nhưng về nhà bạn lại lặp lại thói quen cũ thì tốt nhất bạn không nên sử dụng coaching vì nó sẽ rất lãng phí cho bạn.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bgc-card-gray3" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-gray-card pl-0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            4. Bạn cần thẳng thắn và trung thực
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse  collapse-card" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body bgc-card-gray3">
                        <p class="text-justify">Đạo đức nghề nghiệp nên người coach sẽ có Hợp đồng thỏa thuận bảo mật thông tin dành cho bạn. Những gì bạn nói với coach đều sẽ được giữ kín và không tiết lộ nên bạn hãy cởi mở chia sẻ những gì còn khúc mắc, kìm nén trong lòng. Mục đích là để bạn được thông suốt mọi vấn đề, khi đó hành động mới rõ ràng và dễ dàng tạo ra sự thay đổi tốt đẹp hơn.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bgc-card-gray4" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-gray-card pl-0" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            5. Khi bạn sẵn sàng thì quá trình coaching sẽ bắt đầu
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse  collapse-card" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body bgc-card-gray4">
                        <p class="text-justify">Bạn và coach có sự kết nối, bạn đã sẵn sàng thì quá trình coaching sẽ được bắt đầu. Để thay đổi bạn cần thời gian, một chương trình coaching thường sẽ diễn ra trong 03 tháng hoặc dài hơn tùy vào vấn đề và nhu cầu của bạn. Hai bên ký Hợp đồng coaching, bạn thanh toán phí và lên lịch hẹn cho các phiên coaching tiếp theo. Mỗi phiên coaching thường sẽ kéo dài một tiếng đồng hồ. Bạn sẽ gặp coach 1-2 tuần/lần.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price-table">
        <div class="container">
            <h2 class="h1 text-center">Các Gói Coaching</h2>
            <div class="container-price-table">
                <div class="item-price-table bgc-price-table">
                    <h3 class="h4">Gói Coaching 1 Tháng</h3>
                    <p class="text-justify">Khi bạn muốn hiểu thấu đáo hơn các vấn đề đang xảy ra với mình, mong muốn có giải pháp giải quyết.</p>
                    <div id="priceTable" >
                        <div class="card">
                            <div class="card-header bgc-price-table" id="cardOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-gray-card p-0 collapsed" data-toggle="collapse" data-target="#priceOne" aria-expanded="false" aria-controls="collapseOne">
                                        Tìm hiểu thêm <span class="pull-right"><i class="fas fa-plus-circle"></i><i class="fas fa-minus-circle"></i></span>
                                    </button>
                                </h5>
                            </div>

                            <div id="priceOne" class="collapse  collapse-card bgc-price-table" aria-labelledby="cardOne" data-parent="#priceTable">
                                <div class="card-body bgc-price-table">
                                    <p class="text-justify">Mọi thứ đều bắt đầu từ chính bạn. Cuộc sống này là của bạn và chẳng ai sống thay được. Vì thế sẽ chẳng ai giúp được bạn nếu như bạn chẳng biết mình muốn gì. Bạn có thể bế tắc nhưng bạn cần có mong muốn. Người coach sẽ chỉ giúp được bạn khi bạn có mong muốn, bất kể mong muốn đó là gì.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p>3.000.000đ</p>
                    </div>
                    <a class="btn-coaching" href="/lien-he">Đăng kí <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="item-price-table bgc-price-table1">
                    <h3>Gói Coaching 3 Tháng</h3>
                    <p class="text-justify">Khi bạn muốn giải quyết vấn đề thực tại thông qua việc xây dựng những thói quen mới tích cực hơn.</p>
                    <div id="priceTable" class="item-p-coaching">
                        <div class="card">
                            <div class="card-header bgc-price-table1" id="cardTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-gray-card p-0 collapsed" data-toggle="collapse" data-target="#priceTwo" aria-expanded="false" aria-controls="collapseOne">
                                        Tìm hiểu thêm <span class="pull-right"><i class="fas fa-plus-circle"></i><i class="fas fa-minus-circle"></i></span>
                                    </button>
                                </h5>
                            </div>

                            <div id="priceTwo" class="collapse  collapse-card bgc-price-table1" aria-labelledby="cardTwo" data-parent="#priceTable">
                                <div class="card-body bgc-price-table1">
                                    <p class="text-justify">Bạn sẽ có một phiên coaching miễn phí đầu tiên để cảm nhận mức độ phù hợp trước khi quyết định có lựa chọn sử dụng gói Coaching hay không.</p>
                                    <p class="text-justify">Sau khi ký Hợp đồng Coaching thì quá trình coaching sẽ bắt đầu.</p>
                                    <p class="text-justify">Hai tuần một lần bạn sẽ có 01 tiếng nói chuyện với coach. Sau mỗi phiên coach đều có các hành động thiết thực. Bạn cần nghiêm túc làm nó sau khi về nhà.</p>
                                    <p class="text-justify">Tổng gói này bạn sẽ có 6 phiên coaching, sử dụng trong 3 tháng. Bạn sẽ được làm Sinh trắc vân tay để thấu hiểu mình hơn trị giá 3.000.000 vnđ.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p>7.000.000đ</p>
                    </div>
                    <a class="btn-coaching" href="/lien-he">Đăng kí <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="item-price-table bgc-price-table2">
                    <h3>Gói Coaching 6 Tháng</h3>
                    <p class="text-justify">Khi bạn muốn làm mới bản thân và trở về sống với phiên bản đẹp nhất của chính mình.</p>
                    <div id="priceTable" class="item-p-coaching">
                        <div class="card">
                            <div class="card-header bgc-price-table2" id="cardThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-gray-card p-0 collapsed" data-toggle="collapse" data-target="#priceThree" aria-expanded="false" aria-controls="collapseOne">
                                        Tìm hiểu thêm <span class="pull-right"><i class="fas fa-plus-circle"></i><i class="fas fa-minus-circle"></i></span>
                                    </button>
                                </h5>
                            </div>

                            <div id="priceThree" class="collapse  collapse-card bgc-price-table2" aria-labelledby="cardThree" data-parent="#priceTable">
                                <div class="card-body bgc-price-table2">
                                    <p class="text-justify">Bạn sẽ có một phiên coaching miễn phí đầu tiên để cảm nhận mức độ phù hợp trước khi quyết định có lựa chọn sử dụng gói Coaching hay không.</p>
                                    <p class="text-justify">Sau khi ký Hợp đồng Coaching thì quá trình coaching sẽ bắt đầu.</p>
                                    <p class="text-justify">Hai tuần một lần bạn sẽ có 01 tiếng nói chuyện với coach. Sau mỗi phiên coach đều có các hành động thiết thực. Bạn cần nghiêm túc làm nó sau khi về nhà.</p>
                                    <p class="text-justify">Tổng gói này bạn sẽ có 15 phiên coaching, sử dụng trong 6 tháng. Trong đó 12 phiên tập trung vào mong muốn chính, 3 phiên cho chủ đề bạn tự chọn. Ngoài ra, bạn sẽ được làm Sinh trắc vân tay để thấu hiểu mình hơn trị giá 3.000.000 vnđ.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p>10.000.000đ</p>
                    </div>
                    <a class="btn-coaching" href="/lien-he">Đăng kí <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="divider-bottom bgc-divide-gray"></div>
    </section>
    <!--        end body-->
    <footer id="footer-1" class="bg-image footer division">
        <div class="container">
            <!-- FOOTER CONTENT -->
            <!-- FOOTER COPYRIGHT -->
            <div class="bottom-footer">
                <?php if($page['bottom-footer']) print render($page['bottom-footer']) ?>
            </div>
        </div>	   <!-- End container -->
    </footer>	<!-- END FOOTER-2 -->
</div>
<!--service-->


