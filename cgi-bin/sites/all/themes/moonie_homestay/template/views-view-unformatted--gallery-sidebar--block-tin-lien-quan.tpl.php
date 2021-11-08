<?php
?>
<section class="widget">
    <h2 class="page-tpl-php">Tin liên quan</h2>
    <div class="holder">
        <ul class="list-unstyled">
            <?php foreach ($rows as $id => $row): ?>
                <li class="danh-muc"><?php print $row; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>