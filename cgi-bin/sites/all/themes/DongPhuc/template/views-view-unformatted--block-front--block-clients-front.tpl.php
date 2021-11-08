<section class="pdt-40 pdb-40">
    <div class="section-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title-left-part ">
                        <h3 class="title">Đối tác / khách hàng</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel client-items">
                        <?php foreach ($rows as $row):?>
                            <div class="client-item">
                                <?php print $row?>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
