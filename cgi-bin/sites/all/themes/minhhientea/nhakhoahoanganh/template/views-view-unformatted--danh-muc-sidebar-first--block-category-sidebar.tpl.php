<?php
?>
<div class="sidebar sidebar-right mt-sm-30">
    <div class="widget">
        <h4 class="widget-title text-uppercase">Danh mục dịch vụ</h4>
        <div class="categories">
            <ul class="list list-border angle-double-right">
                <?php foreach ($rows as $id => $row): ?>
                        <?php print $row; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

