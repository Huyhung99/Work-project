<div class="row">
    <div class="col-12">
        <h2 class="main-title text-uppercase wide-100 mb-30">Dự án</h2>
    </div>
    <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-4 col-md-6">
            <?php print $row ?>
        </div>
    <?php endforeach; ?>
</div>