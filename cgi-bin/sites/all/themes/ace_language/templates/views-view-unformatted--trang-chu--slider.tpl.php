<section class="slideshow">
    <div id="slider" class="owl-carousel owl-theme">
        <?php foreach ($rows as $id => $row): ?>
            <div class="item">
            <?php print $row; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>