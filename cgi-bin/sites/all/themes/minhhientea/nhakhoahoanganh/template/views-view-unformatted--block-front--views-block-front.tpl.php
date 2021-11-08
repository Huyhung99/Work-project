<?php
?>
<section id="blog" class="bg-lighter">
    <div class="container">
        <div class="section-title text-center mt-0">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="mt-0 line-height-1 text-uppercase"><span class="text-theme-colored2 text-uppercase">Tin tức</span></h2>
                    <div class="title-icon">
                        <img class="mb-10" src="/sites/default/files/title-icon.png" alt="Nha Khoa Hoàng Anh">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                    <?php foreach ($rows as $id => $row): ?>
                        <div class="col-sm-6 col-md-4">
                            <?php print $row; ?>
                        </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

