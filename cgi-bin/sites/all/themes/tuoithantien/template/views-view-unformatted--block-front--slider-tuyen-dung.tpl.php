<!--[title]{{}}[field_image]{{}}
[field_muc_luong]{{}}[field_ngay_ket_thuc_tuyen_dung]{{}}
[field_so_luong]{{}}[field_thoi_gian_ve]{{}}
[field_thoi_gian_di_lam]{{}}[path]{{}}[created]-->
<div class="cotrol-tap">
  <a class="control-prev" href="#demo" data-slide="prev">
    <i class="far fa-angle-left"></i>
  </a>
  <a class="control-next" href="#demo" data-slide="next">
    <i class="far fa-angle-right"></i>
  </a>
</div>
<div class="slider_tuyen_dung">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <?php $adem=0;?>
    <ul class="carousel-indicators">
    <?php foreach ($rows as $id => $row): ?>
      <li data-target="#demo" data-slide-to="<?=$adem?>" class="<?php if($id==0) print 'active'?>"></li>
      <?php $adem++;?>
    <?php endforeach;?>
    </ul>
    <div class="carousel-inner">
      <?php $dem=0;?>
      <?php $soluongphantu=4;?>
    <?php foreach ($rows as $id => $row): ?>
    <?php 	$arr = explode('{{}}', $row); ?>
    <?php if($dem%$soluongphantu==0):?>
        <div class="carousel-item <?php if($id==0) print 'active'?>">
          <?php endif;?>
          <div class="item-tin-tuyendung">
            <div class="row">
              <div class="col-6 col-lg-6">
                <div class="row">
                  <div class="col-6 col-lg-6">
                    <div class="row">
                      <div class="col-12 col-lg-12">
                        <div class="tieu-dechuc-vu text-yellow font-bold"><?= $arr[0]?></div>
                      </div>
                      <div class="col-12 col-lg-12">
                        <div class="row">
                          <div class="col-2 col-lg-2">
                            <i class="far fa-alarm-clock mart-5"></i>
                          </div>
                          <div class="col-10 col-lg-10">
                            <?php $arr[6]=explode('">',$arr[6])?>
                            <?php $tu=explode('</',$arr[6][1])?>
                            <?php $tu[0]=explode(' - ',$tu[0])?>
                            <?php $arr[5]=explode('">',$arr[5])?>
                            <?php $den=explode('</',$arr[5][1])?>
                            <?php $den[0]=explode(' - ',$den[0])?>
                            <div class="thoi-gian-lam mart-5"><p class="thoi-gian-lam-viec"><span class="thoi-gian-lam time-lam"><?php print $tu[0][1].' AM'?></span> - <Span class="thoi-gian-ve time-lam"><?= $den[0][1].' PM'?></Span></p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-6">
                    <div class="row">
                      <div class="col-2 col-lg-2">
                        <i class="fas fa-envelope-open-dollar"></i>
                      </div>
                      <div class="col-10 col-lg-10">
                        <div class="muc-luong pab-5">
                          <p>
                            <?php if((strlen($arr[2])-strlen(str_replace('h','',$arr[2])))==0)
                            {
                              $arr[2]=explode('-',$arr[2]);
                              print number_format(intval($arr[2][0]),'0','','.').' - '.number_format(intval($arr[2][1]),'0','','.');
                            }
                            else
                            {
                              print $arr[2];
                            }
                            ?>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2 col-lg-2">
                        <i class="fad fa-user"></i>
                      </div>
                      <div class="col-10 col-lg-10">
                        <div class="so-luong-nguoi">
                          <?='0'.$arr[4].' người'?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-6">
                <div class="row">
                  <div class="col-12 col-lg-12">
                    <div class="ngay-ket-thuc-ung-tuyen pab-5">
                      <?php $arr[8]=explode(' - ',$arr[8]);?>
                      <?php
                      $ngay1=explode('">',$arr[3]);
                      $ngay2=explode('</',$ngay1[1]);
                      $ngayconlai=strtotime($ngay2[0])-strtotime($arr[8][0]);
                      $ngayhethan=''.($ngayconlai/24/60/60).'';
                      if($ngayconlai<=0)
                      {
                        $ngayhethan='hết hạn';
                      print 'Cập nhật: ' . $arr[8][0] . ' - Bạn đã <span class="han-ung-tuyen">' . $ngayhethan . '</span> ứng tuyển';
                      }
                      else
                      {
                      print 'Cập nhật: '.$arr[8][0] .' - Bạn còn <span class="han-ung-tuyen">'.$ngayhethan.'</span> ngày để ứng tuyển';
                      }
                      ?>
                    </div>
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="link-chitiet-tuyendung">
                      <p><a href="<?=$arr[7]?>" class="mart-5">Xem chi tiết</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $dem++;?>
        <?php if($dem%$soluongphantu==0 && $dem!=0) print '</div>';?>
      <!-- The slideshow -->
    <?php endforeach;?>
          <?php if($soluongphantu%2!=0) print '</div>'?>
    </div>
    <!-- Left and right controls -->
  </div>
</div>


