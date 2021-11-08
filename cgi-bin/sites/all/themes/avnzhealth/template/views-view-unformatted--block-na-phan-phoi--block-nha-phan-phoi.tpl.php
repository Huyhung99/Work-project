<div class="container">
    <div class="sidebar-block blogs-bestseller">
        <div class=" row">
            <?php foreach ($rows as $id => $row): ?>
                <div class="col-md-4 col-4 ">
                  <div class="moble-nha-phan-phoi">
                    <?php print $row; ?>
                  </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
