<!--[field_image]{{}}[field_image_1]{{}}[field_caption]{{}}[field_mo_ta_slider]-->
<div class="slider">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <?php foreach ($rows as $id => $row): ?>
                <?php $arr = explode('{{}}',$row);
                $field_image = $arr[0]; ?>
                <div class="item">
                    <?= $field_image?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
