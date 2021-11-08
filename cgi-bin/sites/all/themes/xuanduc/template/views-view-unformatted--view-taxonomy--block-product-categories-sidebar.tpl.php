<div class="widget widget_popular_post">
    <h3 class="widget-title">Danh mục sản phẩm</h3>
    <ul class="category-product">
        <?php foreach ($rows as $id => $row): ?>
            <li><?php print $row; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
