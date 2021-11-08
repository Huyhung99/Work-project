<?php
?>
<div class="section-full bg-white p-t30 bg-bottom-right bg-no-repeat"
     style="background-image:url(/sites/all/themes/spa-equipment/assets/images/stone-spa.png)">
    <div class="container">
        <!-- TITLE START-->
        <div class="section-head text-center">
            <h2><span class="text-primary text-uppercase">sản phẩm bán chạy</span></h2>
            <div class="wt-separator-outer ">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-primary"></i>
                    <span class="separator-left bg-pink"></span>
                    <span class="separator-right bg-pink"></span>
                </div>
            </div>
        </div>
        <!-- TITLE END-->
        <div class="section-content">
            <div class="row">
                <?php foreach ($rows as $id => $row): ?>
                <div class="col-md-3 col-xs-6 p-t15">
                        <?php print $row; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


