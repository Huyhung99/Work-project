<div class="section-full awesome-services bg-white p-t30 p-b20">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center section-head">
                    <h1 class="h3">ĐIỆN LẠNH MINH NGÂN</h1>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator style-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($rows as $row):?>
                    <?php $arr = explode('{{}}',$row);
                        $title = $arr[0];
                        $body = $arr[1];
                        $image = $arr[2];
                        $path = $arr[3];
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="dez-box m-b30">
                            <div data-link="<?=$path?>" class="services-front">
                                <div class="dez-media dez-img-effect zoom"> <?= $image?>
                                    <div class="dez-info-has p-a20 bg-secondry no-hover">
                                        <div class="icon-bx-wraper center">
                                            <div class="icon-content">
                                                <h3 class="dez-tilte m-b5"><?=str_replace('Dịch vụ vận tải đường bộ Bắc-Trung-Nam và chiều ngược lại, xe chạy liên tục hàng ngày','Vận tải đường bộ Bắc-Trung-Nam',
                                                        str_replace('Dịch vụ giao nhận hàng hóa, giao và nhận hàng tận nơi trên tất cả các tỉnh thành','Giao nhận hàng hóa',
                                                            str_replace('Dịch vụ cho thuê kho bãi chứa hàng','Cho thuê kho bãi chứa hàng',$title)))?></h3>
                                                <p><?=$body?></p>
                                                <a href="<?=$path?>" class="site-button-link">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>


