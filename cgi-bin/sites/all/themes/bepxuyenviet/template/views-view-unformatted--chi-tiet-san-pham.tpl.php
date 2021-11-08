<!--[add_to_cart_form]{{}}[product_id]{{}}[commerce_price]{{}}[title]{{}}[path]{{}}[field__nh]{{}}[field_images]{{}}[field_images_1]{{}}[field_cho_phep_dat_hang_vao_gio]-->
<div class="top-interesting-area dotted-style2 <?php
if($view->get_title()=='ĐÁ NHÂN TẠO - KÍNH')
{
  print 'pb-50';
}
else {
  if ($view->get_title() =='SẢN PHẨM - VÁCH NGĂN CNC - ĐÁ NHÂN TẠO - KÍNH') {
    print 'pt-80';
  }
  else {
    if ($view->get_title() =='BỘ SƯU TẬP MẪU TỦ BẾP ĐẸP' || $view->get_title() =='TƯ VẤN THIẾT KẾ') {
      print 'pb-50';
    }
    else
    {
      print 'pb-50 pt-80';
    }
  }
}

?>
">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2><?php if($view->get_title()!='ĐÁ NHÂN TẠO - KÍNH') print t($view->get_title())?></h2>
          <?php if($view->get_title()=='BỘ SƯU TẬP MẪU TỦ BẾP ĐẸP')
            print '<p>Chúng tôi chuyên cung cấp các loại sản phẩm tủ, tủ bếp: tủ Lavabo cao cấp, bán sẵn, đặt thiết kế sản xuất, tủ bếp nhựa đẹp, hiện đại, tủ bếp chữ G, I, II, L, U...</p>';?>
          <?php if($view->get_title()=='TẤT CẢ SẢN PHẨM')
            {
              print '<p>532.252 khách hàng đã dùng sản phẩm của chúng tôi, Hãy nhanh tay đăng kí ngay hôm nay để là người tiếp theo sử dụng sản phẩm của chúng tôi</p>';
            }
          ?>
          <?php if($view->get_title()=='TƯ VẤN THIẾT KẾ')
          {
            print '<p>Sáng tạo mọi lúc mọi nơi - Chúng tôi luôn sẵn sàng lắng nghe và tư vấn trao đổi kinh nghiệm thiết kế cho bạn</p>';
          }
          ?>
        </div>
      </div>
    </div>
    <?php $arr=array();?>
    <?php $chay=0;?>
    <?php foreach ($rows as $id => $row): ?>
      <?php $arr[$id]=$row;
      $chay++;
      ?>
    <?php endforeach; ?>
    <?php if($view->get_title()=='ĐÁ NHÂN TẠO - KÍNH'):?>
      <div class="row">
        <div class="top-interesting-active">
          <?php for($id=0;$id<$chay;$id++):?>
            <?php $a=explode('{{}}',$arr[$id])?>
            <div class="col-lg-12">
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
                      print '<h4>'.strip_tags($a[2]).'</h4>';
                    }
//                    else
//                    {
//                      print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
//                    }
                    ?>
                  </h4>
                </div>
              </div>
            </div>
          <?php endfor;?>
        </div>
      </div>
    <?php else:?>
      <?php if($view->get_title()=='TƯ VẤN THIẾT KẾ'):?>
        <div class="row">
          <?php for($id=0;$id<intval($chay);$id++):?>
            <?php $a=explode('{{}}',$arr[$id])?>
            <div class="col-lg-3 col-md-6">
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
                  <p class="mo_ta_tu_van_thiet_kes"><?=$a[11]?></p>
                  <h4>
                    <?php
                      if(strlen($a[8])-strlen(str_replace('Có','',$a[8]))!=0)
                      {
                        print '<h4>'.strip_tags($a[2]).'</h4>';
                      }
//                      else
//                      {
//                        print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
//                      }
                    ?>
                  </h4>
                </div>
              </div>
            </div>
          <?php endfor;?>
        </div>
      <?php else:?>
        <?php if($view->get_title()=='BỘ SƯU TẬP MẪU TỦ BẾP ĐẸP'):?>
        <?php print menu_con();?>
          <div class="row">
<!--              <div class="top-interesting-active">-->
            <?php for($id=0;$id<intval($chay/3);$id++):?>
              <div class="col-md-3">
                  <?php $a=explode('{{}}',$arr[$id])?>
    <!--                <div class="col-lg-12">-->
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
                            print '<h4>'.strip_tags($a[2]).'</h4>';
                          }
                          //                      else
                          //                      {
                          //                        print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
                          //                      }
                          ?>
                        </h4>
                      </div>
                    </div>
    <!--                </div>-->
              </div>
            <?php endfor;?>
          </div>
          <div class="row">
            <!--              <div class="top-interesting-active">-->
            <?php for($id=intval($chay/3);$id<intval($chay*2/3);$id++):?>
              <div class="col-md-3">
                <?php $a=explode('{{}}',$arr[$id])?>
                <!--                <div class="col-lg-12">-->
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
                        print '<h4>'.strip_tags($a[2]).'</h4>';
                      }
                      //                      else
                      //                      {
                      //                        print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
                      //                      }
                      ?>
                    </h4>
                  </div>
                </div>
                <!--                </div>-->
              </div>
            <?php endfor;?>
          </div>
          <div class="row">
            <?php for($id=intval($chay*2/3);$id<intval($chay);$id++):?>
              <div class="col-md-3">
                <?php $a=explode('{{}}',$arr[$id])?>
                <!--                <div class="col-lg-12">-->
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
                        print '<h4>'.strip_tags($a[2]).'</h4>';
                      }
                      //                      else
                      //                      {
                      //                        print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
                      //                      }
                      ?>
                    </h4>
                  </div>
                </div>
                <!--                </div>-->
              </div>
            <?php endfor;?>
          </div>
          <p class="text-center"><a href="/tu-bep-dep.html" class="shopnow mt-0">Xem tất cả</a></p>
        <?php else:?>
          <div class="row">
            <!--              <div class="top-interesting-active">-->
            <?php for($id=0;$id<intval($chay/3);$id++):?>
              <div class="col-md-3">
                <?php $a=explode('{{}}',$arr[$id])?>
                <!--                <div class="col-lg-12">-->
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
                        print '<h4>'.strip_tags($a[2]).'</h4>';
                      }
                      //                      else
                      //                      {
                      //                        print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
                      //                      }
                      ?>
                    </h4>
                  </div>
                </div>
                <!--                </div>-->
              </div>
            <?php endfor;?>
          </div>
          <div class="row">
            <!--              <div class="top-interesting-active">-->
            <?php for($id=intval($chay/3);$id<intval($chay*2/3);$id++):?>
              <div class="col-md-3">
                <?php $a=explode('{{}}',$arr[$id])?>
                <!--                <div class="col-lg-12">-->
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
                        print '<h4>'.strip_tags($a[2]).'</h4>';
                      }
                      //                      else
                      //                      {
                      //                        print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
                      //                      }
                      ?>
                    </h4>
                  </div>
                </div>
                <!--                </div>-->
              </div>
            <?php endfor;?>
          </div>
          <div class="row">
            <?php for($id=intval($chay*2/3);$id<intval($chay);$id++):?>
              <div class="col-md-3">
                <?php $a=explode('{{}}',$arr[$id])?>
                <!--                <div class="col-lg-12">-->
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
                        print '<h4>'.strip_tags($a[2]).'</h4>';
                      }
                      //                      else
                      //                      {
                      //                        print '<a href="/bao-gia-san-pham?id='.strip_tags($a[10]).'">Liên hệ</a>';
                      //                      }
                      ?>
                    </h4>
                  </div>
                </div>
                <!--                </div>-->
              </div>
            <?php endfor;?>
          </div>
          <p class="text-center"><a href="/san-pham.html" class="shopnow mt-0">Xem tất cả</a></p>
        <?php endif;?>
      <?php endif;?>
    <?php endif;?>
  </div>
</div>
