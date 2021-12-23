<div class="property-details-slider-info">
    <h3 class="mb-30"><?= $node->title ?></h3>
</div>

<?php if (!empty($node->field_anh_lien_quan)) : ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $relatedImage = $node->field_anh_lien_quan['und'];
            $i = 0;
            ?>
            <?php foreach ($relatedImage as $item): ?>
                <?php

                $titleImage = $item['title'];
                $altImage = $item['alt'];
                $image = theme_image_style([
                    'style_name' => '1280_x_960',
                    'path' => $item['uri'],
                    'alt' => $titleImage,
                    'title' => $altImage,
                    'attributes' => array('class' => 'img-responsive img-fluid d-block'),
                    'width' => '1280px',
                    'height' => '960px',
                ]);
                ?>
                <?php if ($i == 0): ?>
                    <div class="carousel-item active">
                        <?=$image?>
                    </div>
                <?php else: ?>
                    <div class="carousel-item">
                        <?=$image?>
                    </div>
                <?php endif;
                $i++;
                ?>
            <?php endforeach; ?>
        </div>
        <ol class="carousel-indicators image-product-carousel owl-carousel">
            <?php
            $relatedImage = $node->field_anh_lien_quan['und'];
            $i = 0;
            ?>
            <?php foreach ($relatedImage as $item): ?>
                <?php
                $titleImage = $item['title'];
                $altImage = $item['alt'];
                $image = theme_image_style([
                    'style_name' => '1280_x_960',
                    'path' => $item['uri'],
                    'alt' => $titleImage,
                    'title' => $altImage,
                    'attributes' => array('class' => 'img-responsive img-fluid d-block'),
                    'width' => '1280px',
                    'height' => '960px',
                ]);
                ?>
                <?php if ($i == 0): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="active">
                       <?=$image?>
                    </li>
                <?php else: ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>">
                        <?=$image?>
                    </li>
                <?php endif;
                $i++;
                ?>
            <?php endforeach; ?>
        </ol>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php else: ?>
    <?php
    $titleImage = $node->field_image['und'][0]['title'];
    $altImage = $node->field_image['und'][0]['alt'];
    $image_avatar = theme_image_style([
        'style_name' => '1280_x_960',
        'path' => $node->field_image['und'][0]['uri'],
        'alt' => $titleImage,
        'title' => $altImage,
        'attributes' => array('class' => 'img-responsive img-fluid d-block'),
        'width' => '1280px',
        'height' => '960px',
    ])
    ?>
    <?= $image_avatar ?>
<?php endif; ?>


<div class="property-info">
    <div class="left-product">
        <div class="single-property-info">
            <p>
                <i class="fa fa-expand"></i> <?= !empty($node->field_dien_tich_mat_bang) ? $node->field_dien_tich_mat_bang['und'][0]['value'] : '' ?>
                m<sup>2</sup></p>
        </div>
        <div class="single-property-info">
            <p><i class="fa fa-bath"></i> <?= $node->field_so_phong_tam['und'][0]['value'] ?>VS</p>
        </div>
        <div class="single-property-info">
            <p><i class="fa fa-bed"></i> <?= $node->field_so_giuong['und'][0]['value'] ?> PN</p>
        </div>
        <div class="single-property-info">
            <?php if (!empty($node->field_huong)): ?>
                <?php
                $direction = array_values($node->field_huong['und']);
                ?>

                <p><i class="fab fa-safari"></i> <?= implode(", ", array_column($direction, 'value')) ?></p>
            <?php endif; ?>

        </div>
    </div>
    <div class="right-product">
        <div class="price-properties"><i class="fas fa-money-bill"></i>
            <span><?= isset($node->field_gia_bang_chu['und'][0]['value']) ? $node->field_gia_bang_chu['und'][0]['value'] : '' ?></span>
        </div>
    </div>
</div>
<h3 class="title-properties mt-50">Thông tin chi tiết </h3>

<div class="detail-info">
    <div class="item-detail-info"><strong>Tiêu đề: </strong><span><?= $node->title ?></span></div>

    <div class="item-detail-info"><strong>Địa chỉ: </strong>
        <span>
            <?php if (!empty($node->field_dia_chi_du_an)): ?>
                <?= $node->field_dia_chi_du_an['und'][0]['value'] ?>
            <?php endif; ?>
        </span>
    </div>
    <div class="item-detail-info"><strong>Loại BDS: </strong>
        <?php if (!empty($node->field_loai_san_pham)): ?>
            <span><?= taxonomy_term_load($node->field_loai_san_pham['und'][0]['tid'])->name ?></span>
        <?php endif; ?>
    </div>
    <div class="item-detail-info"><strong>Diện tích mặt bằng: </strong>
        <?php if (!empty($node->field_dien_tich_mat_bang)): ?>
            <span><?= $node->field_dien_tich_mat_bang['und'][0]['value'] ?> m<sup>2</sup></span>
        <?php endif; ?>
    </div>
    <div class="item-detail-info"><strong>Hướng nhà: </strong>
        <?php if (!empty($node->field_huong)): ?>
            <?php
            $direction = array_values($node->field_huong['und']);
            ?>
            <span><?= implode(", ", array_column($direction, 'value')) ?></span>

        <?php endif; ?>
    </div>
    <div class="item-detail-info"><strong>Giấy tờ BDS: </strong><span></span></div>
</div>


<h3 class="title-properties mt-50">Mô tả chi tiết </h3>
<div class="property-news-single-card style-two border-bottom-yellow detail-info">
    <?php if (!empty($node->body)): ?>
        <?= $node->body['und'][0]['value'] ?>
    <?php endif; ?>
</div>

