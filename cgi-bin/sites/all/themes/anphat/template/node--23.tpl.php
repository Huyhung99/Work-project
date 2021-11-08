<?php
?>
<div class="single_page_listing_style">
    <div class="container-fluid p0">
        <div class="row">
            <div class="col-sm-6 col-lg-6 p0">
                <div class="row m0">
                    <div class="col-lg-12 p0">
                        <div class="spls_style_one pr1 1px">
                            <?php print render($content['field_image'])?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 p0">
                <div class="row m0">
                    <?php for ($i = 0;$i < 4;$i++):?>
                    <div class="col-sm-6 col-lg-6 p0">
                        <div class="spls_style_one">
                            <?php print render($content['field_anh_lien_quan'][$i]) ?>


                        </div>
                    </div>
                    <?php endfor;?>

                </div>
            </div>

        </div>
    </div>
</div>

