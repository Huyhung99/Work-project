<div class="footer-widget">
    <h3 class="widget-title lienket">Tin tức mới nhất</h3>
    <?php foreach ($rows as $id => $row): ?>
        <article class="post">
            <?php print $row; ?>
        </article>
    <?php endforeach; ?>
</div>
