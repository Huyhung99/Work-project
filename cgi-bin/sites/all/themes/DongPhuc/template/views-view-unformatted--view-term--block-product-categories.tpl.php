<section class="pdb-40 pdt-40 pdt-sm-30 pdb-sm-0">
    <div class="section-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title-left-part">
                        <h3 class="title"><?=$view->get_title()?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <?php foreach ($rows as $row):?>
                    <div class="col-md-3 col-6">
                        <?php print $row?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>