<div class="section-full bg-white p-t50 p-b57">
    <div>
        <div class="mfp-gallery clearfix">
            <div class="row">
                <?php foreach ($rows as $id => $row): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 m-b30">
                    <div class="mt-box bg-white bdr-1 bdr-solid bdr-gray-light">
                        <?php print $row; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


