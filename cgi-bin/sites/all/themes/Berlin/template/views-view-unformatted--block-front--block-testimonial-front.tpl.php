<div id="rs-testimonial" class="rs-testimonial bg5 pt-30 pb-30">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2 class="white-color">Học viên tiêu biểu</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
                    <?php foreach ($rows as $row):?>
                        <?php print $row?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
