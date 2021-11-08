<?php
?>

<div class="widget bg-white  widget_services">
    <h4 class="widget-title">DANH MỤC</h4>
    <ul>
        <?php foreach ($rows as $id => $row): ?>
            <li><?php print $row; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
