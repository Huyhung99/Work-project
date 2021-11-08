<?php
?>
<h5 class="footer-heading text-uppercase">Danh mục sản phẩm</h5>
<div class="footer-list">
    <?php $i =0?>
    <?php foreach ($rows as $id => $row): ?>
    <?php if ($i)?>
    <div class="footer-list__item">
        <?php print $row; ?>
    </div>
    <?php $i++?>
<?php endforeach; ?>
</div>