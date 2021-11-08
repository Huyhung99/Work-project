<section class="product-front pdt-40 pdb-40">
    <div class="container">
        <div class="section-title-left-part mrb-sm-30">
            <h2 class="title">Sản phẩm mới</h2>
        </div>
        <div class="row">
            <?php foreach ($rows as $row):?>
                <div class="col-md-3 col-6 mrt-30">
                    <?php print $row?>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>