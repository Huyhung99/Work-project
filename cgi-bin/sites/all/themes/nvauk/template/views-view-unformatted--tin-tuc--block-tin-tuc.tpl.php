<?php
?>
<section class="news-section" id="news-section">
    <div class="auto-container">
        <div class="sec-title text-center light">
            <h2><?php print t('Tin tức mới nhất')?></h2>
        </div>
        <div class="row">
            <?php foreach ($rows as $id => $row): ?>
                <div class="news-block col-lg-4 col-md-4 col-sm-12">
                    <?php print $row; ?>
                </div>
            <?php endforeach; ?>
            <!-- News Block -->
        </div>
    </div>
</section>

