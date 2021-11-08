<?php
?>
<section class="widget">
    <h2 class="page-tpl-php">Hình ảnh</h2>
    <div class="holder">
        <ul class="list-inline gallery">
            <?php foreach ($rows as $id => $row): ?>
                    <li><?php print $row; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
