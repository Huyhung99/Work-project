<div class="footer-box">
    <h3 class="title-bar-footer text-uppercase">Bài viết mới nhất</h3>
    <?php foreach ($rows as $id => $row): ?>
        <div class="footer-blog-post">
            <div class="media">
                <?php print $row; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>