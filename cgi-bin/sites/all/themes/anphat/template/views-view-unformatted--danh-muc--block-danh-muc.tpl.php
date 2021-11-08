<?php
?>
<div class="terms_condition_widget">
    <h4 class="title">Danh mục sản phẩm</h4>
    <div class="widget_list">
        <ul class="list_details">
            <?php foreach ($rows as $id => $row): ?>
                    <?php print $row; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

