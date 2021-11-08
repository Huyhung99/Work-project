<div class="row">
        <?php foreach ($rows as $id => $row): ?>
            <div class="col-md-3 col-6">
                <div class="product-box mb-md-20">
                    <?php print $row; ?>
                </div>
            </div>
        <?php endforeach; ?>
</div>