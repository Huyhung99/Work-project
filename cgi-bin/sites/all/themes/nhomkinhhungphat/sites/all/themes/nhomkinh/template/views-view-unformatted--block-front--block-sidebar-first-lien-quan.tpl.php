<div class="widget widget_popular_post">
    <h3 class="widget-title">DỊCH VỤ LIÊN QUAN</h3>
    <?php foreach ($rows as $id => $row): ?>
        <article class="post">
            <?php print $row; ?>
        </article>
    <?php endforeach; ?>
</div>