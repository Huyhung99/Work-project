<div class="section-full bg-white p-tb50">
    <div class="container">
        <div class="partner-front">
            <?php foreach ($rows as $row): ?>
                <?php $arr = explode('{{}}', $row);
                $field_image = trim($arr[0]);
                $field_image_1 = trim($arr[1]);
                $title = trim($arr[2]);
                ?>
                <a href="<?= $field_image_1 ?>" class="client-logo mt-img-effect on-color">
                    <?= $field_image ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>