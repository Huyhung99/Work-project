<!--[title]{{}}[field_image]{{}}[path]{{}}[body]{{}}[field_gia]{{}}[field_ngay]{{}}[field_luu_luong]-->
<div class="testimonial-slider">
    <?php foreach ($rows as $id => $row): ?>
        <?php $arr = explode('{{}}', $row);
        $title = $arr[0];
        $field_image = $arr[1];
        $path = $arr[2];
        $field_gia = $arr[4];
        $field_ngay = $arr[5];
        $field_luu_luong = $arr[6];
        ?>
        <div class="col-md-4">
            <div class="item-data">
                <div class="img-data">
                    <?php print $field_image; ?>
                </div>
                <div class="content-data">
                    <div class="left-content">
                        <span><a href="<?= $path ?>" class="title-data"><?= $title ?></a></span>
                        <p class="price-data">
                            <?= $field_gia ?>/?<?php if (!empty($field_ngay)) print $field_ngay ?> </p>
                    </div>
                    <div class="right-content">
                        <span class="capacity-data"><?= $field_luu_luong ?></span>
                        <p class="quality-data">Tốc độ cao</p>
                    </div>
                    <p class="btn-registration"><a class="btn btn-white bdr-10" href="/lien-he">Đăng kí</a></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
