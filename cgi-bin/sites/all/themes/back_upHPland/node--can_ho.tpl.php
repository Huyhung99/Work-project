
<div class="bg-gray pd-top-60 pd-bottom-90 pd-bottom-sm-30 pd-top-sm-30">
    <div class="container">
        <?php if (!empty($node->field_anh_lien_quan)) :?>
            <div class="property-details-slider">
                <?php $relatedImage = $node->field_anh_lien_quan['und'];?>
                <?php foreach ($relatedImage as $item): ?>
                    <?php
                    $pathImageSlider = image_style_url('940_x_720', $item['uri']);
                    $titleImage = $item['title'];
                    $altImage = $item['alt'];
                    ?>
                    <div class="item">
                        <div class="thumb">
                            <img src="<?= $pathImageSlider ?>" alt="<?= $altImage ?>" title="<?= $titleImage ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else:?>
            <?php
            $pathImageSlider = image_style_url('940_x_720', $node->field_image['und'][0]['uri']);
            $titleImage = $node->field_image['und'][0]['title'];
            $altImage = $node->field_image['und'][0]['alt']
            ?>
            <img src="<?=$pathImageSlider?>" alt="<?=$altImage?>" title="<?=$titleImage?>"  class="img-fluid mb-30 bdr-10">
        <?php endif;?>

        <div class="property-details-slider-info">
            <h3 class="mb-30"><?= $node->title ?> <span><?= $node->field_gia_bang_chu['und'][0]['value'] ?></span></h3>
        </div>
        <div class="property-news-single-card style-two border-bottom-yellow">
            <?php print render($content['field_vi_tri_ban_do'])?>
            <?php if ($node->body['und'][0]['value'] != ''):?>
                <?=$node->body['und'][0]['value']?>
            <?php endif;?>

        </div>
        <?php if (!empty($node->field_ngoai_that)):?>
            <div class="property-news-single-card border-bottom-yellow">
                <h4>DỊCH VỤ MIỄN PHÍ</h4>
                <div class="row">
                    <?php
                    $terms= array();
                    foreach ($node->field_dich_vu_mien_phi['und'] as $item){
                        foreach ($item as $subItem){
                            $terms[] = taxonomy_term_load($subItem);
                        }
                    }
                    ?>
                    <?php foreach ($terms as $term):?>
                        <?php if (!empty($term)):?>
                            <div class="col-sm-4">
                                <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endif;?>
        <?php if (!empty($node->field_dich_vu_tra_phi)):?>
            <div class="property-news-single-card border-bottom-yellow">
                <h4>DỊCH VỤ TRẢ PHÍ </h4>
                <div class="row">
                    <?php
                    $terms= array();
                    foreach ($node->field_dich_vu_tra_phi['und'] as $item){
                        foreach ($item as $subItem){
                            $terms[] = taxonomy_term_load($subItem);
                        }
                    }
                    ?>
                    <?php foreach ($terms as $term):?>
                        <?php if (!empty($term)):?>
                            <div class="col-sm-4">
                                <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endif;?>
        <?php if (!empty($node->field_noi_that)):?>
            <div class="property-news-single-card border-bottom-yellow">
                <h4>NỘI THẤT</h4>
                <div class="row">
                    <?php
                    $terms= array();
                    foreach ($node->field_noi_that['und'] as $item){
                        foreach ($item as $subItem){
                            $terms[] = taxonomy_term_load($subItem);
                        }
                    }
                    ?>
                    <?php foreach ($terms as $term):?>
                        <?php if (!empty($term)):?>
                            <div class="col-sm-4">
                                <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endif;?>
        <?php if (!empty($node->field_trang_thiet_bi)):?>

            <div class="property-news-single-card border-bottom-yellow">
                <h4>TRANG THIẾT BỊ</h4>
                <div class="row">
                    <?php
                    $terms= array();
                    foreach ($node->field_trang_thiet_bi['und'] as $item){
                        foreach ($item as $subItem){
                            $terms[] = taxonomy_term_load($subItem);
                        }
                    }
                    ?>
                    <?php foreach ($terms as $term):?>
                        <?php if (!empty($term)):?>
                            <div class="col-sm-4">
                                <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endif;?>
        <?php if (!empty($node->field_dac_diem_noi_bat_noi_that)):?>
            <div class="property-news-single-card border-bottom-yellow">
                <h4>ĐẶC ĐIỂM NỔI BẬT CỦA NỘI THẤT</h4>
                <div class="row">
                    <?php
                    $terms= array();
                    foreach ($node->field_dac_diem_noi_bat_noi_that['und'] as $item){
                        foreach ($item as $subItem){
                            $terms[] = taxonomy_term_load($subItem);
                        }
                    }
                    ?>
                    <?php foreach ($terms as $term):?>
                        <?php if (!empty($term)):?>
                            <div class="col-sm-4">
                                <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endif;?>
        <?php if (!empty($node->field_ngoai_that)):?>
            <div class="property-news-single-card border-bottom-yellow">
                <h4>NGOẠI THẤT</h4>
                <div class="row">
                    <?php
                    $terms= array();
                    $keyTerm = array();
                    foreach ($node->field_ngoai_that['und'] as $item){
                        foreach ($item as $subItem){
                            $terms[] = taxonomy_term_load($subItem);
                        }
                    }
                    ?>
                    <?php foreach ($terms as $term):?>
                        <?php if (!empty($term)):?>
                            <div class="col-sm-4">
                                <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endif;?>
    </div>
</div>

