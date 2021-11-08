<div class="block-blog mb-30">
    <div class="row overflow-hidden">
        <div class="col-12">
            <h2 class="main-title wow fadeIn">Tin tức</h2>
        </div>
    </div>
    <div class="owl-carousel wow fadeIn" id="blogPostList">
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
    </div>
</div>