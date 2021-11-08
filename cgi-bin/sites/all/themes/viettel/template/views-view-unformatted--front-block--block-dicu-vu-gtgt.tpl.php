<!--[title]{{}}[field_image]{{}}[path]{{}}[body]{{}}[field_gia]{{}}[field_ngay]-->
    <div class="dataQT">
        <?php foreach ($rows as $id => $row):?>
            <?php $arr = explode('{{}}',$row);
            $title = $arr[0];
            $field_image = $arr[1];
            $path = $arr[2];
            $body = $arr[3];
            $field_gia = $arr[4];
            $field_ngay = $arr[5];
            ?>
            <div class="col-md-6">
                <div class="item-gtgt mb-30">
                    <div class="img-gtgt">
                        <?= $field_image?>
                    </div>
                    <div class="content-gtgt box ">
                        <h3><?=$title?></h3>
                        <div class="detail-gtgt">
                            <div class="detail-price">
                                <p><?=$body?></p>
                                <span class="price-gtgt"><?= number_format($field_gia,0,',','.')?>đ/tháng</span>
                            </div>
                            <div>
                                <p class="btn-registration"><a href="/lien-he" class="btn btn-white bdr-10">Đăng ký</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
