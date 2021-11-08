 <div class="container-fluid custom-container">
    <div class="row nha-phan-phoi">
        <div class="col-12 nha-phan-phoi-khoi">
            <div class="category-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($rows as $id => $row): ?>
                        <div class="swiper-slide">
                            <?php print $row; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>