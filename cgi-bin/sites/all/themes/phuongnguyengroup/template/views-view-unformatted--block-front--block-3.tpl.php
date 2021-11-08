<?php $arr=['Nguyễn Huy Thành','Nguyễn Thị Hồng Cao Tùng','Phạm Trung mận'];
$ten='Tuổi Thần Tiên';
$array_link_name=["Câu hỏi gần đây","Câu hỏi nhiều nhất","Truy cập nhiều nhất"];
$array_link=['cau-hoi-gan-day','cau-hoi-nhieu-nhat','truy-cap-nhieu-nhat'];
$arr_cau_hoi=['Sau khi tốt nghiệp trường Montessori, Trẻ có thể thích nghi được với môi trường tư thục hay truyền thống hay không?'];
$arr_mang=['2','2','1'];
?>
<div class="cmt-mb">
  <?php foreach ($array_link_name as $j=>$row):?>
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
                      <a type="button" data-toggle="modal" data-target="#binh-luan-<?=$j?>" class="xem-all-binh-luan">Xem tất cả <?=$bluan?> bình luận</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php endforeach;?>
</div>
