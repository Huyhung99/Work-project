<section class="projects  pb-30" data-scroll-index="3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-20 text-center">
                <h6 class="small-title">Danh mục đầu tư</h6>
                <h4 class="title">Nhật ký công trình</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($rows as $id => $row): ?>
                            <?php print $row; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
