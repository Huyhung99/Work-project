<div class="related-products">
    <div class="page-title">
        <h2><?php print t($view->get_title()) ?></h2>
    </div>
    <div class="group-related">
        <div class="group-related-inner">
            <div class="rp-slider owl-carousel">
                <?php foreach ($rows as $id => $row): ?>
                    <?php print $row; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>






