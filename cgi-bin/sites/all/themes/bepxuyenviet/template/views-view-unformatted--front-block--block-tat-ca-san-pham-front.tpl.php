<!--[add_to_cart_form]{{}}[product_id]{{}}[commerce_price]{{}}[title]{{}}[path]{{}}[field__nh]{{}}[field_image]{{}}[field_images_1]{{}}[field_cho_phep_dat_hang_vao_gio]{{}}[field_image_1]{{}}[nid]-->
<div class="top-interesting-area dotted-style2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>THI CÔNG TỦ BẾP TỪ HÀ GIANG TỚI PHÚ QUỐC</h2>
                    <div class="posi"><p>Tự hào là đơn vị đầu tiên tại Việt Nam ứng dụng chất liệu Nhựa PVC đặc vào sản xuất Nội Thất Tủ Bếp, Tủ lavabo, Tủ quần áo...<br>
                        bền vững hơn 20 năm kinh nghiệm, hệ thống showroom toàn quốc. Xuyên Việt luôn là địa chỉ đáng tin cậy cho khách hàng tham khảo và lựa chọn</p></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($rows as $id => $row): ?>
            <?php $a = explode('{{}}',$row)?>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="single-new-product">
                        <div class="product-img">
                            <a href="<?=$a[4]?>">
                                <?=$a[6]?>
                                <!--                      --><?//=$a[7]?>
                            </a>
                            <div class="new-product-action">
                                <?php if(strlen($a[8])-strlen(str_replace('Có','',$a[8]))!=0):?>
                                    <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>
                                    <div class="add-to-cart d-none">
                                        <?php print '<a href="#">'.$a[0].'</a>';?>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="product-content text-center">
                            <h3 class="title_product"><a href="<?=$a[4]?>"><?=$a[3]?></a></h3>
                            <h4>
                                <?php
                                if(strlen($a[8])-strlen(str_replace('Có','',$a[8]))!=0)
                                {
                                    print $a[2];
                                }
                                //                  else
                                //                  {
                                //                    print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
                                //                  }
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<!--    <p class="text-center"><a href="/du-an-tieu-bieu.html" class="shopnow mt-0">Xem tất cả</a></p>-->
</div>

<!--<div class="top-interesting-area dotted-style2 pt-80 pb-50">-->
<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      <div class="col-lg-12">-->
<!--        <div class="section-title text-center">-->
<!--          <h2>DỰ ÁN TIÊU BIỂU</h2>-->
<!---->
<!--          <div class="posi"><p>Kéo trái phải để xem nhiều sản phẩm hơn</p></div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    --><?php //$arr=array();?>
<!--    --><?php //$chay=0;?>
<!--    --><?php //foreach ($rows as $id => $row): ?>
<!--        --><?php //$arr[$id]=$row;
//        $chay++;
//        ?>
<!--    --><?php //endforeach; ?>
<!--    <div class="row">-->
<!--        --><?php //for($id=0;$id<intval($chay/2);$id++):?>
<!--            --><?php //$a=explode('{{}}',$arr[$id])?>
<!--            <div class="col-lg-3">-->
<!--                <div class="single-new-product">-->
<!--                    <div class="product-img">-->
<!--                        <a href="--><?//=$a[4]?><!--">-->
<!--                            --><?//=$a[6]?>
<!--                                                  --><?////=$a[7]?>
<!--                        </a>-->
<!--                        <div class="new-product-action">-->
<!--                            --><?php //if(strlen($a[8])-strlen(str_replace('Có','',$a[8]))!=0):?>
<!--                                <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>-->
<!--                                <div class="add-to-cart d-none">-->
<!--                                    --><?php //print '<a href="#">'.$a[0].'</a>';?>
<!--                                </div>-->
<!--                            --><?php //endif;?>
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="product-content text-center">-->
<!--                        <h3 class="title_product"><a href="--><?//=$a[4]?><!--">--><?//=$a[3]?><!--</a></h3>-->
<!--                        <h4>-->
<!--                            --><?php
//                            if(strlen($a[8])-strlen(str_replace('Có','',$a[8]))!=0)
//                            {
//                                print $a[2];
//                            }
//                            //                  else
//                            //                  {
//                            //                    print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
//                            //                  }
//                            ?>
<!--                        </h4>-->
<!--                        <div class="product-price-star">-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            --><?php //$random=rand(0,1);?>
<!--                            --><?php //if($random==1) print '<i class="fa fa-star-o"></i>';?>
<!--                            --><?php //if($random==0) print '<i class="fa fa-star"></i>';?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endfor;?>
<!--    </div>-->
<!--    <div class="row">-->
<!--        --><?php //for($id=intval($chay/2);$id<$chay;$id++):?>
<!--            --><?php //$a=explode('{{}}',$arr[$id])?>
<!--            <div class="col-lg-3">-->
<!--                <div class="single-new-product">-->
<!--                    <div class="product-img">-->
<!--                        <a href="--><?//=$a[4]?><!--">-->
<!--                            --><?//=$a[6]?>
<!--                                                  --><?////=$a[7]?>
<!--                        </a>-->
<!--                        <div class="new-product-action">-->
<!--                            --><?php //if(strlen($a[8])-strlen(str_replace('Có','',$a[8]))!=0):?>
<!--                                <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>-->
<!--                                <div class="add-to-cart d-none">-->
<!--                                    --><?php //print '<a href="#">'.$a[0].'</a>';?>
<!--                                </div>-->
<!--                            --><?php //endif;?>
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="product-content text-center">-->
<!--                        <h3 class="title_product"><a href="--><?//=$a[4]?><!--">--><?//=$a[3]?><!--</a></h3>-->
<!--                        <h4>-->
<!--                            --><?php
//                            if(strlen($a[8])-strlen(str_replace('Có','',$a[8]))!=0)
//                            {
//                                print $a[2];
//                            }
//                            //                  else
//                            //                  {
//                            //                    print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
//                            //                  }
//                            ?>
<!--                        </h4>-->
<!--                        <div class="product-price-star">-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            <i class="fa fa-star"></i>-->
<!--                            --><?php //$random=rand(0,1);?>
<!--                            --><?php //if($random==1) print '<i class="fa fa-star-o"></i>';?>
<!--                            --><?php //if($random==0) print '<i class="fa fa-star"></i>';?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endfor;?>
<!--    </div>-->
<!--  </div>-->
<!--  <p class="text-center"><a href="/san-pham" class="shopnow mt-0">Xem tất cả</a></p>-->
<!--</div>-->
