<?php
?>
<section class="widget">
    <h2 class="page-tpl-php">Chuyên mục</h2>
    <div class="holder">
            <ul class="list-unstyled">
                <?php foreach ($rows as $id => $row): ?>
                    <li class="danh-muc"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><?php print $row; ?></li>
                <?php endforeach; ?>
            </ul>
    </div>
</section>

