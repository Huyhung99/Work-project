<div class="product-area section-pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <!-- Section Title Start -->
                <div class="section-title small--mt__30">
                    <h2>Khóa học Nổi Bật</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <?php foreach ($rows as $id => $row):?>
              <div class="col-md-3">
                <?php print $row?>
              </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
