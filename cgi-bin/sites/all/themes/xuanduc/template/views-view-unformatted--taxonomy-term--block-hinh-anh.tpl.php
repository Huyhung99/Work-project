<div class="auto-container">
        <div class="row">
            <?php foreach ($rows as $id => $row): ?>
                <div class="team-block-one col-lg-4 col-md-6">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <?php print $row; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</div>