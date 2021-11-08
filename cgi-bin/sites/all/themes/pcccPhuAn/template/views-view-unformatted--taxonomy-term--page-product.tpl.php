<div class="shop-products-wrap">
    <div class="tab-content">
        <div class="tab-pane active" id="grid">
            <div class="shop-product-wrap">
                <div class="row row-8">
                        <!-- Single Product Start -->
                        <?php foreach ($rows as $id => $row):?>
                            <div class="product-col col-lg-3 col-md-4 col-sm-6">
                                <?php print $row?>
                            </div>
                        <?php endforeach;?>
                        <!-- Single Product End -->

                </div>
            </div>
        </div>
    </div>
</div>
