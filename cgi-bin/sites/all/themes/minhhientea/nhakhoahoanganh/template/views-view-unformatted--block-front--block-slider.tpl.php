<?php
?>
<section id="home">
    <div class="container-fluid p-0">
        <div class="owl-carousel-1col" data-nav="true">
            <?php foreach ($rows as $id => $row): ?>
                <?php print $row; ?>
            <?php endforeach;?>
        </div>
    </div>
</section>

