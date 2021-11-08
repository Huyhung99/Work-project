<?php
?>
<section class="rooms-section container-image add-padding">
    <div class="row">
        <header class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 header">
            <h2 id="hinh-anh">Hình ảnh</h2>
        </header>
    </div>
    <div class="row">
        <?php foreach ($rows as $id => $row): ?>
                <div  class="col-sm-4 col-md-2 col-xs-6 info-block animate" data-anim-type="fadeInUp" data-anim-delay="300">
                    <?php print $row; ?>
                </div>
            <?php if ($id==5):?>
                <?php break;?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <?php foreach ($rows as $id => $row): ?>
            <?php if ($id >=6):?>
                <div  class="col-sm-4 col-md-2 col-xs-6 info-block animate" data-anim-type="fadeInUp" data-anim-delay="300">
                <?php print $row; ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>



</section>
