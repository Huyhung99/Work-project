<div class="widget widget_popular_post">
    <h3 class="widget-title">DANH MỤC DỊCH VỤ</h3>
    <?php foreach ($rows as $id => $row): ?>
        <article class="post">
            <?php print $row; ?>
        </article>
    <?php endforeach; ?>
</div>