<div class="blog-area gray-bg section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2><b>Tin</b> Mới Nhất</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($rows as $id => $row):?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <?php print $row?>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
