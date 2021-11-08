<?php
?>


<div class="section-full latest-blog bg-gray p-tb30">
    <div class="container">
        <div class="section-head text-center">
            <h2><span class="text-primary">TIN TỨC MỚI</span></h2>
            <div class="wt-separator-outer ">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-primary"></i>
                    <span class="separator-left bg-pink"></span>
                    <span class="separator-right bg-pink"></span>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="owl-carousel blog-carousel owl-btn-vertical-center">
                <?php foreach ($rows as $id => $row):?>
                    <div class="item">
                        <?php print $row;?>
                    </div>
                    <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
