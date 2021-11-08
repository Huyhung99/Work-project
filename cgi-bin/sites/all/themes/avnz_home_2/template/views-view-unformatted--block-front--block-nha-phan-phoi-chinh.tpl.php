<div class="row">
    <div class="col-12">
        <div class="section-header-left title">
            <h3 class="text-light-black header-title">NHÀ PHÂN PHỐI</h3>
        </div>
    </div>
    <div class="nha-phan-phoi">
        <?php foreach ($rows as $id => $row): ?>
            <div class="col-md-3 col-4">
                <?php print $row; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>