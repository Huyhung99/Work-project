<div class="container icon-nganh-hang">
    <div class="page-title">
<!--        <h2>--><?php //print t($view->get_title()); ?><!--</h2>-->
      <h2>LOẠI SẢN PHẨM</h2>
    </div>
    <div class="nganh-hang-2">
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
    </div>
</div>
