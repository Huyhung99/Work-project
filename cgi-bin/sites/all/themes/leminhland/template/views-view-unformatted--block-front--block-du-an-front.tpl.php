<div class="container">
    <div class="section-title">
        <h1 class="title text-uppercase">Dự án LeMinhLand</h1>
    </div>
    <div class="row">
        <?php
//        [title]{{}}[field_image]{{}}[field_image_1]{{}}[nid]{{}}[path]{{}}[field_dien_tich_su_dung]{{}}[field_so_phong_tam]{{}}[created]{{}}[field_so_phong]{{}}[field_so_giuong]{{}}[field_gia_san_pham_tu]{{}}[field_gia_san_pham_den]{{}}[field_tong_dien_tich_khu_dat]{{}}[field_gia_bang_chu]
        foreach ($rows as $row):
            $arr = explode('{{}}', $row);
            $title = $arr[0];
            $field_image = $arr[1];
            $nid_project = $arr[3];
            $path = $arr[4];
            $field_dien_tich_su_dung = $arr[5];
            $field_so_phong_tam = $arr[6];
            $created = $arr[7];
            $field_so_phong = $arr[8];
            $field_so_giuong = $arr[9];
            $field_gia_san_pham_tu = $arr[10];
            $field_gia_san_pham_den = $arr[11];
            $field_tong_dien_tich_khu_dat = $arr[12];
            $field_gia_bang_chu = $arr[13];
            $field_dien_tich_bang_chu = $arr[14];
            //load data can ho
            $apartments = node_type_arr('can_ho'); ?>
            <div class="col-lg-6">
                <div class="single-leading-feature">
                    <a href="<?=$path?>">
                        <div class="slf-overlay"></div>
                    </a>
                    <div class="thumb">
                        <?= $field_image ?>
                    </div>
                    <div class="details">
                        <h4 class="title"><a href="<?= $path ?>"><?= $title ?></a></h4>
                        <h5 class="price"><?=$field_gia_bang_chu?></h5>
                        <span> Tổng diện tích: <?= $field_dien_tich_bang_chu == '' ? $field_tong_dien_tich_khu_dat.'m<sup>2</sup>' : $field_dien_tich_bang_chu?> </span>
                    </div>
                </div>
            </div>
            <?php $i = 0;?>
            <div class="col-md-6">
                <div class="featured-slider slider-control-top">
                    <?php foreach ($apartments as $apartment): ?>
                        <?php if (trim($apartment->field_du_an['und'][0]['nid']) == trim($nid_project)): ?>
                            <div class="single-feature">
                                <div class="thumb" data-src ="<?=check_plain(url('node/'.$apartment->nid, array()))?>">
                                    <?php
                                    $image_uri = $apartment->field_image['und'][0]['uri'];
                                    $path_img = image_style_url('510_x_480', $image_uri)
                                    ?>
                                    <!--                            <a href="--><?//= check_plain(url('node/'.$apartment->nid, array()))?><!--">-->
                                    <img  class="lozad" data-src="<?=$path_img?>" alt="<?=$apartment->field_image['und'][0]['alt']?>" title="<?=$apartment->field_image['und'][0]['title']?>">
                                    <!--                            </a>-->
                                </div>
                                <div class="details">
                                    <a href="<?=$path?>" class="feature-logo">
                                        <img src="/sites/all/themes/leminhland/assets/img/icons/l3.png" alt="icons">
                                    </a>
                                    <p class="author"><i class="fa fa-calendar"></i> <?=date('d/m/Y',$apartment->field_ngay_dang['und'][0]['value'])?></p>
                                    <h6 class="title"><a href="<?= check_plain(url('node/'.$apartment->nid, array())) ?>"><?= $apartment->title ?></a></h6>
                                    <h6 class="price"><?=$apartment->field_gia_bang_chu['und'][0]['value']?></h6>
                                    <ul class="info-list">
                                        <li><i class="fa fa-bed"></i> <?= $apartment->field_so_giuong['und'][0]['value'] ?> phòng ngủ</li>
                                        <li><i class="fa fa-bath"></i> <?= $apartment->field_so_phong_tam['und'][0]['value'] ?> phòng WC</li>
                                    </ul>
                                </div>
                            </div>
                            <?php $i++;?>
                        <?php endif; ?>
<!--                        --><?php //if ($i==2){
//                            break;
//                        }?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
