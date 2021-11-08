<div class="widget instagram-widget">
    <h3 class="widget-title hinhanhsidebar">Hình ảnh nổi bật</h3>
    <div class="inner-box">
        <div class="wrapper-box">
            <?php foreach ($rows as $id => $row): ?>
                <div class="image col-md-4 col-4 sidebarhinhanh">
                    <?php print $row; ?>
                </div>
            <?php endforeach; ?>
        </div><!-- /.gallery-wrapper -->
    </div>
</div>
