<div class="news-block-four">
    <div class="inner-box">
        <div class="row">
            <?php foreach ($rows as $id => $row): ?>
                <div class="col-md-4 col-6 dichvu">
                    <article class="post">
                        <?php print $row; ?>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
