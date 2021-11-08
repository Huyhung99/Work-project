<?php
?>
<div class="section-full p-tb30">
    <div class="container">
        <!-- PAGINATION START -->
        <!-- PAGINATION END -->
    </div>
    <!-- GALLERY CONTENT START -->
    <div class="portfolio-wrap mfp-gallery news-grid clearfix">
        <div class="container-fluid">
            <div class="row">
                <!-- COLUMNS 1 -->
                    <?php foreach ($rows as $id => $row): ?>
                        <div class="masonry-item cat-1 col-md-3 col-xs-6 m-b30">
                        <?php print $row; ?>
                        </div>

                    <?php endforeach; ?>
                <!-- COLUMNS 2 -->

            </div>
        </div>
    </div>
    <!-- GALLERY CONTENT END -->

</div>

