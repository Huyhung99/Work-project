<?php
?>
<div class="section-full p-t30 p-b30 bg-repeat" style="background-image:url(/sites/all/themes/spa-equipment/assets/images/background/bg-6.jpg);">
    <div class="container">

        <!-- TITLE START -->
        <div class="section-head text-center">
            <h2><span class="text-primary"> ĐỐI TÁC</span></h2>
            <div class="wt-separator-outer ">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-primary"></i>
                    <span class="separator-left bg-primary"></span>
                    <span class="separator-right bg-primary"></span>
                </div>
            </div>
        </div>
        <!-- TITLE END -->

        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="owl-carousel client-logo-carousel">
                <?php foreach ($rows as $id => $row): ?>
                    <div class="item">
                    <?php print $row; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- IMAGE CAROUSEL START -->
    </div>
</div>

