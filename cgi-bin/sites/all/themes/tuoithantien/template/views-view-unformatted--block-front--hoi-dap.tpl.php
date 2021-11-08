<?php $arr=['Nguyễn Huy Thành','Nguyễn Thị Hồng Cao Tùng','Phạm Trung mận'];
$ten='Tuổi Thần Tiên';
$array_link_name=["Câu hỏi gần đây","Câu hỏi nhiều nhất","Truy cập nhiều nhất"];
$array_link=['cau-hoi-gan-day','cau-hoi-nhieu-nhat','truy-cap-nhieu-nhat'];
$arr_cau_hoi=['Sau khi tốt nghiệp trường Montessori, Trẻ có thể thích nghi được với môi trường tư thục hay truyền thống hay không?'];
$arr_mang=['2','2','1'];
?>
<form class="search-comment display-none-mb" method="">
  <input type="text" name="title" class=" form-text" placeholder="Tìm kiếm câu hỏi ..." value="">
  <button class="search_submit" type="submit">
    <i class="fal fa-search"></i>
  </button>
</form>
<div class="tap-hoi-dap display-none-mb">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#<?=$array_link[0]?>">Câu Hỏi Gần đây</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#<?=$array_link[1]?>">Trả lời nhiều nhất</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#<?=$array_link[2]?>">Truy cập nhiều nhất</a>
    </li>
    <li class="nav-item">
      <a type="button" class="btn btn-primary color-yellow" data-toggle="modal" data-target="#exampleModal">
        Đặt câu hỏi
      </a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <?php for($i=0;$i<3;$i++):?>
      <div class="tab-pane container <?= $i==0 ? 'active': 'fade'?>" id="<?=$array_link[$i]?>">
        <?php for($j=0;$j<intval($arr_mang[$i]);$j++):?>
        <div class="cmt-hoi-dap">
          <div class="row">
            <div class="col-md-2 col-2"><img class="img-user-hoi-dap" src="/sites/default/files/anh-gai-xinh-hot-girl-nhat-ban_0.jpg" title="ảnh user"></div>
            <div class="col-md-10 col-10">
              <div class="row">
                <div class="col-md-12 col-12">
                  <div class="name-user-hoi-dap">
                    <h3><?=$arr[$j]?><span class="time-cau-hoi">
                    Câu hỏi: 19.01.2021
                  </span></h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-12">
                  <div class="cau-hoi-dap">
                    <h3><?=$arr_cau_hoi[0]?></h3>
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <div class="icon-like">
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <span><i class="far fa-heart"></i> <?php print rand(0,5)?></span>
                      </div>
                      <div class="col-md-2 col-2">
                        <span><i class="far fa-comment"></i> <?php $bluan=rand(0,5); print $bluan?></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <a type="button" data-toggle="modal" data-target="#binh-luan-<?=$j?>" class="xem-all-binh-luan">Xem tất cả <?=$bluan?> bình luận</a>
                </div>
              </div>
              <div class="rep-cmt-hoi-dap">
                <div class="row">
                  <div class="col-md-2 col-2">
                    <a href="/" title="Trang chủ" rel="home" id="logo">
                      <img src="/sites/default/files/bg-cropped-asset-1.png" class="img-responsive img-fluid" alt="Trang chủ">
                    </a>
                  </div>
                  <div class="col-md-10 col-10">
                    <div class="row">
                      <div class="col-md-12 col-12">
                        <div class="name-user-hoi-dap">
                          <h3><?=$ten?>
                            <span class="time-cau-hoi">Câu hỏi: 19.01.2021</span>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-12">
                        <div class="cau-hoi-dap">
                          <h3>Xin chào <?=$arr[$j]?>! Sẽ không có điều gì gây khó khăn cho nhứng đứa trẻ từ các trường Montessori chuyển sang các trường truyền thống . Có thể 1 số trẻ sẽ thấy nhàm chán, nhứng đứa trẻ khác có thể sẽ không hiểu tại sao mọi người trong một lớp học phải làm những việc giống nhau. Tuy nhiên, hầu hết trẻ đều thích nghi với mội trường mới một cách nhanh chóng, kết bạn và thành công.</h3>
                        </div>
                      </div>
                      <div class="col-md-12 col-12">
                        <div class="icon-like">
                          <div class="row">
                            <div class="col-md-2 col-2">
                              <span><i class="far fa-heart"></i> <?php print rand(0,1)?></span>
                            </div>
                            <div class="col-md-2 col-2">
                              <span><i class="far fa-comment"></i> <?php print rand(0,1)?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="nut_dang_binh_luan">
                <form class="comment" method="">
                  <input type="text" name="title" class=" form-text" placeholder="Thêm bình luận ..." value="">
                  <p><a href="#" class="search_submit hien_pup_up" data-toggle="modal" data-target="#pop_up">
                  Đăng
                  </a></p>

                </form>
              </div>
            </div>
          </div>
        </div>
        <?php endfor;?>
      </div>
    <?php endfor;?>
  </div>
</div>
<?php $tenrong=''?>
<div class="display-none-pc slider_tuyen_dung_c">
  <?php foreach ($array_link_name as $id=>$row):?>
  <?php if($row !=$tenrong)
    if($id!=0)
      echo '</div></div><div class="row"><div class="col-4"></div><div class="col-4"><p class="phan_trang_so_hoc_he text-center"><a href="/hoi-dap-xem-tat-ca">1</a><a href="/hoi-dap-xem-tat-ca">25</a></p></div><div class="col-4 ">
<div class="bg-white view-all">
    <a class="link-blog-thu-vien p10-30" href="/hoi-dap-xem-tat-ca">Xem tất cả</a>
  </div></div></div>';
      $tenrong=$row;
      if($id==0){$tenrong=$row.'<span><a type="button" class="btn btn-primary color-yellow" data-toggle="modal" data-target="#exampleModal">
        Đặt câu hỏi
      </a></span>';}
    echo '<div class="row display-none-pc"><div class="col-md-12"><h2 class="text-left title-tuyen_dung_silder mt-20 mb-20">'.$tenrong.'</h2></div><div class="owl-carousel owl-theme services-holder mb-hd">';
    ?>
  <?php for($j=0;$j<3;$j++):?>
  <div class="sbox-5 slider_tuyen_dung_co">
    <div class="row ">
      <div class="col-md-2 col-3">
        <img class="img-user-hoi-dap" src="/sites/default/files/anh-gai-xinh-hot-girl-nhat-ban_0.jpg" title="ảnh user">
      </div>
      <div class="col-md-12 col-9">
        <div class="name-user-hoi-dap">
          <h3><?=$arr[$j]?><p class="time-cau-hoi">
                    Câu hỏi: 19.01.2021
                  </p></h3>
        </div>
      </div>
      <div class="col-md-10 col-12">
        <div class="row">
          <div class="col-md-12 col-12">
            <div class="cau-hoi-dap">
              <h3><?=$arr_cau_hoi[0]?></h3>
            </div>
          </div>
          <div class="col-md-12 col-12">
            <div class="icon-like">
              <div class="row">
                <div class="col-md-2 col-2">
                  <span><i class="far fa-heart"></i> <?php print rand(0,5)?></span>
                </div>
                <div class="col-md-2 col-2">
                  <span><i class="far fa-comment"></i> <?php $bluan=rand(0,5); print $bluan?></span>
                </div>
                <div class="col-md-12 col-8">
                  <a type="button" data-toggle="modal" data-target="#binh-luan-<?=$j?>-mb" class="xem-all-binh-luan">Xem tất cả <?=$bluan?> bình luận</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endfor;?>
  <?php endforeach;?>
  <?php print '</div></div><div class="row"><div class="col-4"></div><div class="col-4"><p class="phan_trang_so_hoc_he text-center"><a href="/hoi-dap-xem-tat-ca">1</a><a href="/hoi-dap-xem-tat-ca">25</a></p></div><div class="col-4 ">
<div class="bg-white view-all">
    <a class="link-blog-thu-vien p10-30" href="/hoi-dap-xem-tat-ca">Xem tất cả</a>
  </div></div></div>'?>
</div>

<?php for($j=0;$j<3;$j++):?>
  <div class="modal fade popup-cauhoi" id="binh-luan-<?=$j?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close bthoidap" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <div class="comment-dau-tien">
            <div class="row">
              <div class="col-md-2 col-2"><img class="img-user-hoi-dap" src="/sites/default/files/anh-gai-xinh-hot-girl-nhat-ban_0.jpg" title="ảnh user"></div>
              <div class="col-md-10 col-10">
                <div class="row">
                  <div class="col-md-12 col-12">
                    <div class="name-user-hoi-dap">
                      <h3><?=$arr[$j]?><span class="time-cau-hoi">
                    Câu hỏi: 19.01.2021
                  </span></h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-12">
                    <div class="cau-hoi-dap">
                      <h3><?=$arr_cau_hoi[0]?></h3>
                    </div>
                  </div>
                  <div class="col-md-12 col-12">
                    <div class="icon-like">
                      <div class="row">
                        <div class="col-md-3 col-3">
                          <span><?php print rand(0,5)?> lượt thích</span>
                        </div>
                        <div class="col-md-4 col-4">
                          <span><?php print $bluan?> bình luận</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="rep-cmt-hoi-dap">
            <div class="row">
              <div class="col-md-2 col-2">
                <a href="/" title="Trang chủ" rel="home" id="logo">
                  <img src="/sites/default/files/bg-cropped-asset-1.png" class="img-responsive img-fluid" alt="Trang chủ">
                </a>
              </div>
              <div class="col-md-10 col-10">
                <div class="row">
                  <div class="col-md-12 col-12">
                    <div class="name-user-hoi-dap">
                      <h3><?=$ten?>
                        <span class="time-cau-hoi">Câu hỏi: 19.01.2021</span>
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-12">
                    <div class="cau-hoi-dap">
                      <h3>Xin chào <?=$arr[$j]?>! Sẽ không có điều gì gây khó khăn cho nhứng đứa trẻ từ các trường Montessori chuyển sang các trường truyền thống . Có thể 1 số trẻ sẽ thấy nhàm chán, nhứng đứa trẻ khác có thể sẽ không hiểu tại sao mọi người trong một lớp học phải làm những việc giống nhau. Tuy nhiên, hầu hết trẻ đều thích nghi với mội trường mới một cách nhanh chóng, kết bạn và thành công.</h3>
                    </div>
                  </div>
                  <div class="col-md-12 col-12">
                    <div class="icon-like">
                      <div class="row">
                        <div class="col-md-2 col-2">
                          <span><i class="far fa-heart"></i> <?php print rand(0,1)?></span>
                        </div>
                        <div class="col-md-2 col-2">
                          <span><i class="far fa-comment"></i> <?php print rand(0,1)?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="icon-nut-binh-luan">
            <div class="nut-binh-luan"><i class="far fa-heart "></i></div>
            <div class="nut_dang_binh_luan">
              <form class="comment" method="">
                <input type="text" name="title" class=" form-text" placeholder="Thêm bình luận ..." value="">
                <p><a href="#" class="search_submit hien_pup_up" data-toggle="modal" data-target="#pop_up">
                  Đăng
                </a></p>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endfor;?>

<div class="modal fade popup-cauhoi" id="pop_up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close bthoidap" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body">
        <p class="question-icon"><img alt="question-icon_0.png" src="/sites/default/files/question-icon_0.png"></p>
        <div class="thanh_cong_cau_hoi">
          <p class="theo_doi_cau_hoi">Câu hỏi của bạn đã được chúng tôi ghi nhận,<br>Trường mầm non Tuổi Thần Tiên sẽ gửi phản hồi sớm nhất</p>
          <p>Theo dõi câu hỏi của bạn trong trang <a href="#" class="page_hoi_dap">HỎI ĐÁP</a><br>Hoặc tìm kiểm câu hỏi của bạn <a href="#" class="page_hoi_dap">tại đây</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="pop-up-mb">
  <?php for($j=0;$j<3;$j++):?>
    <div class="modal fade popup-cauhoi" id="binh-luan-<?=$j?>-mb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close bthoidap" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="comment-dau-tien">
              <div class="row ">
                <div class="col-md-2 col-3">
                  <img class="img-user-hoi-dap" src="/sites/default/files/anh-gai-xinh-hot-girl-nhat-ban_0.jpg" title="ảnh user">
                </div>
                <div class="col-md-12 col-9">
                  <div class="name-user-hoi-dap">
                    <h3><?=$arr[$j]?><p class="time-cau-hoi">
                        Câu hỏi: 19.01.2021
                      </p></h3>
                  </div>
                </div>
                <div class="col-md-10 col-12">
                  <div class="row">
                    <div class="col-md-12 col-12">
                      <div class="cau-hoi-dap">
                        <h3><?=$arr_cau_hoi[0]?></h3>
                      </div>
                    </div>
                    <div class="col-md-12 col-12">
                      <div class="icon-like">
                        <div class="row">
                          <div class="col-md-2 col-2">
                            <span><i class="far fa-heart"></i> <?php print rand(0,5)?></span>
                          </div>
                          <div class="col-md-2 col-2">
                            <span><i class="far fa-comment"></i> <?php $bluan=rand(0,5); print $bluan?></span>
                          </div>
                          <div class="col-md-12 col-8">
                            <a type="button" data-toggle="modal" data-target="#binh-luan-<?=$j?>" class="xem-all-binh-luan">Xem tất cả <?=$bluan?> bình luận</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rep-cmt-hoi-dap">
              <div class="row ">
                <div class="col-md-2 col-3">
                  <a href="/" title="Trang chủ" rel="home" id="logo">
                    <img src="/sites/default/files/bg-cropped-asset-1.png" class="img-responsive img-fluid" alt="Trang chủ">
                  </a>
                </div>
                <div class="col-md-12 col-9">
                  <div class="name-user-hoi-dap">
                    <h3><?=$ten?><p class="time-cau-hoi">
                        Câu hỏi: 19.01.2021
                      </p></h3>
                  </div>
                </div>
                <div class="col-md-10 col-12">
                  <div class="row">
                    <div class="col-md-12 col-12">
                      <div class="cau-hoi-dap">
                        <h3>Xin chào <?=$arr[$j]?>! Liên hệ đặt lịch hẹn trực tuyến trực tiếp hoặc đăng ký ứng tuyển theo mẫu bên phải. Chúng tôi sẽ phản hồi theo thông tin bạn gửi.</h3>
                      </div>
                    </div>
                    <div class="col-md-12 col-12">
                      <div class="icon-like">
                        <div class="row">
                          <div class="col-md-2 col-2">
                            <span><i class="far fa-heart"></i> <?php print rand(0,5)?></span>
                          </div>
                          <div class="col-md-2 col-2">
                            <span><i class="far fa-comment"></i> <?php $bluan=rand(0,5); print $bluan?></span>
                          </div>
                          <div class="col-md-12 col-8">
                            <a type="button" data-toggle="modal" data-target="#binh-luan-<?=$j?>" class="xem-all-binh-luan">Xem tất cả <?=$bluan?> bình luận</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="icon-nut-binh-luan">
                <div class="nut-binh-luan"><i class="far fa-heart "></i></div>
                <div class="nut_dang_binh_luan">
                  <form class="comment" method="">
                    <input type="text" name="title" class=" form-text" placeholder="Thêm bình luận ..." value="">
                    <p><a href="#" class="search_submit hien_pup_up" data-toggle="modal" data-target="#pop_up">
                        Đăng
                      </a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endfor;?>
</div>


