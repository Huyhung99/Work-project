<div class="widget widget_recent_news">
    <h5 class="widget-title">Sản phẩm nổi bật</h5>
    <ul class="recent-news clearfix">
        <?php foreach ($rows as $id => $row):?>
            <li class="clearfix">
                <?= $row?>
            </li>
        <?php endforeach;?>
    </ul>
</div>