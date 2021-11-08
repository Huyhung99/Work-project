<div class="hero-slider hero-slider-two">
    <?php foreach ($rows as $row):?>
        <?php $arr = explode('{{}}',$row) ?>
        <div class="single-slide lozad" style="background-image: url(<?=trim($arr[0])?>)" data-background-image="<?=trim($arr[0])?>">
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
