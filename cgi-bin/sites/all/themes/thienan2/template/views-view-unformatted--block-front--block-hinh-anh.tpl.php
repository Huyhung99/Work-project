<?php
?>
<div class="widget widget_gallery mfp-gallery">
    <h4 class="widget-title  text-uppercase">HÌNH ẢNH</h4>
    <ul>
        <?php foreach ($rows as $id => $row): ?>
        <li>
                <?php print $row; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="wt-divider bg-black"><i class="icon-dot c-square"></i></div>
