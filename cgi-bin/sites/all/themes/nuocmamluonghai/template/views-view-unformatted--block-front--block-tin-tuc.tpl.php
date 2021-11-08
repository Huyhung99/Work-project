<?php
?>
    <div class="our-blog">
        <div class="container">
            <h2 class="title text-uppercase color-yellow">Tin tức</h2>
            <p class="sub-title color-blue">Kiến thức về mắm</p>
        </div>
        <div class="container">
            <div class="blog-carousel gl-carousel"
                 data-loop="true"
                 data-items="3"
                 data-margin="30"
                 data-autoplay="false"
                 data-autoplay-timeout="10000"
                 data-smart-speed="2000"
                 data-dots="false"
                 data-nav="true"
                 data-nav-speed="false"
                 data-r-x-small="1"
                 data-r-x-small-nav="true"
                 data-r-x-small-dots="false"
                 data-r-x-medium="2"
                 data-r-x-medium-nav="true"
                 data-r-x-medium-dots="false"
                 data-r-small="2"
                 data-r-small-nav="true"
                 data-r-small-dots="false"
                 data-r-medium="3"
                 data-r-medium-nav="true"
                 data-r-medium-dots="false">
                <!--[field_image]{{}}[title]{{}}[body]{{}}[path]-->
                <?php foreach ($rows as $id => $row): ?>
                <?php $arr = explode('{{}}', $row);
                $field_image = trim($arr[0]);
                $title = trim($arr[1]);
                $body = trim($arr[2]);
                $path = trim($arr[3]);
                ?>
                    <div class="blog-box">
                        <div class="blog-img-holder">
                            <a href="<?=$path?>"><?=$field_image?></a>
                        </div>
                        <div class="blog-bottom-content-holder">
                            <h3><?=$title?></h3>
                            <p><?=$body?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

