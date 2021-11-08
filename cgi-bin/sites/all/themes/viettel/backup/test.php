<div class="hero-slider hero-slider-two">
    <?php foreach ($sliders as $slider):?>
        <?php  $path = image_style_path('1440_x_450',$slider['field_image']['vi'][0]['uri'])?>
        <div class="single-slide" style="background-image: url(<?=trim($path)?>)">
            <!-- Hero Content One Start -->
            <div class="hero-content-two container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider-content-text text-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>
    <?php endforeach;?>
</div>
