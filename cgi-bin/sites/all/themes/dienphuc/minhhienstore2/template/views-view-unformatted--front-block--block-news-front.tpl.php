<div class="latest-blog-area section-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>Cẩm Nang Xử Lý Bệnh</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
                <!-- Single Latest Blog Start -->
                <?php foreach ($rows as $id => $row):?>
                <div class="col-lg-3">
                    <?php print $row?>
                </div>
                <?php endforeach;?>
                <!-- Single Latest Blog End -->
        </div>
    </div>
</div>
