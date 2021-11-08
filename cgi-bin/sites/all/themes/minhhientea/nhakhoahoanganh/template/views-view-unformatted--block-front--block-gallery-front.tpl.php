<?php
?>
<section id="gallery">
    <div class="container">
        <div class="section-title text-center mt-0">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="mt-0 line-height-1 text-uppercase"><span class="text-theme-colored2 text-uppercase">Hình ảnh</span></h2>
                    <div class="title-icon">
                        <img class="mb-10" src="/sites/default/files/title-icon.png" alt="Nha Khoa Hoàng Anh">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Portfolio Filter -->
                    <!-- End Portfolio Filter -->

                    <!-- Portfolio Gallery Grid -->
                    <div class="gallery-isotope default-animation-effect grid-4 gutter-small clearfix" data-lightbox="gallery">
                        <!-- Portfolio Item Start -->
                        <div class="row">
                            <?php foreach ($rows as $id => $row): ?>
                                <!--                            {{[field_image]}}{{[field_image_1]}}{{[title]}}-->
                                <?php
                                $arr = explode('{{}}', $row);
                                ?>
                                <div class="col-md-3 col-xs-6 p-0 gallery-item gallery ">
                                    <div class="thumb">
                                        <?=trim($arr[0])?>
                                        <div class="overlay-shade "></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="<?=trim($arr[1])?>" data-lightbox-gallery="gallery" title="<?=trim($arr[2])?>"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                    <!-- End Portfolio Gallery Grid -->
                </div>
            </div>
        </div>
    </div>
</section>



