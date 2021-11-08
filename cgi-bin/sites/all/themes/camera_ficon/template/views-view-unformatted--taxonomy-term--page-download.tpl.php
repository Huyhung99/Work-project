<section class="inner-wrapper blog-sec">
    <div class="row">
        <?php foreach ($rows as $id => $row): ?>
            <div class="col-lg-4 col-md-6 ">
                <?php print $row; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
