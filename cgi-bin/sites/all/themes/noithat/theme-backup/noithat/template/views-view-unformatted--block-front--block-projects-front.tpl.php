<!--[title]{{}}[field_image]{{}}[path]{{}}[field_noi_that]{{}}[field_vi_tri]{{}}[field_thiet_ke_thi_cong]{{}}[field_tong_dien_tich]-->
<?php
global $language ;
$lang_name = $language->language ;
?>
<div class="content-main grey">
    <div class="content-center">
        <div class="title-main">
            <?php if ($lang_name == 'vi'):?>
                <h2>Dự án</h2>
            <?php elseif ($lang_name == 'en'):?>
                <h2>Projects</h2>
            <?php endif;?>
        </div>
        <div class="slide-project special-slide">
            <?php foreach ($rows as $row):?>
                <?php $arr = explode('{{}}',$row)?>
                <?php $title = $arr[0]?>
                <?php $field_image = $arr[1]?>
                <?php $path = $arr[2]?>
                <?php $field_noi_that = $arr[3]?>
                <?php $field_vi_tri = $arr[4]?>
                <?php $field_thiet_ke_thi_cong = $arr[5]?>
                <?php $field_tong_dien_tich = $arr[6]?>
                <?php if ($lang_name == 'vi'):?>
                    <div class="project-box">
                        <div class="title-box">
                            <h3><?=$title?></h3>
                            <p> Vị trí: <?=$field_vi_tri?>
                                <br> Thiết kế và thi công:
                                <strong><?=$field_thiet_ke_thi_cong?></strong>
                                <br> Nội thất:
                                <strong><?=$field_noi_that?></strong>
                                <br> Tổng diện tích:
                                <strong><?=$field_tong_dien_tich?></strong>...
                            </p>
                            <a class="view-more" href="<?=$path?>">xem thêm</a>
                        </div>
                        <div class="project-pic">
                            <div class="pic-img">
                                <?=$field_image?>
                            </div>
                        </div>
                    </div>
                <?php elseif ($lang_name == 'en'):?>
                    <div class="project-box">
                        <div class="title-box">
                            <h3><?=$title?></h3>
                            <p>
                                Location: <?=$field_vi_tri?>
                                <br> Design and construction:
                                <strong><?=$field_thiet_ke_thi_cong?></strong>
                                <br> Furniture:
                                <strong><?=$field_noi_that?></strong>
                                <br> Total area:
                                <strong><?=$field_tong_dien_tich?></strong>...
                            </p>
                            <a class="view-more" href="<?=$path?>">Read more</a>
                        </div>
                        <div class="project-pic">
                            <div class="pic-img">
                                <?=$field_image?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
</div>
