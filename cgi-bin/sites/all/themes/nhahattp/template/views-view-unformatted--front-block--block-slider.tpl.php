<?php
?>
<section class="slider-area">
    <div class="slider-wrapper">
        <?php foreach ($rows as $id => $row): ?>
            <?php $arr = explode('{{}}', $row); ?>
            <?php if($arr[0]!=''):  ?>
            <div class="single-slide" style="background-image: url('<?= trim($arr[0])?>');">
                <div class="banner-content overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-center">
                                        <?php if (isset($arr[1])): ?>
                                        <h2 class="pt-180"><?= $arr[1]?></h2>
                                        <div class="banner-btn">
                                            <?php print l(t('LIÊN HỆ NGAY'), $arr[2],
                                            array(
                                              'attributes' => array(
                                                'class' => array('default-btn')
                                              )
                                            )) ?>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>

</section>
