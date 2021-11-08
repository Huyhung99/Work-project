<?php
?>
<div class="product-area section-pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="text-uppercase">Sản phẩm bán chạy</h3>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- Section Title Start -->
                <div class="view-all-product text-right">
                    <a href="#">Tất cả sản phẩm<i class="icon-chevrons-right"></i></a>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row row-8 product-two-row-4">
            <!-- Single Product Start -->
            <?php foreach ($rows as $id => $row): ?>
                <div class="product-col">
                    <?php print $row; ?>
                </div>
            <?php endforeach; ?>
            <!-- Single Product End -->
        </div>


    </div>
</div>


