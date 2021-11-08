<!--[path]{{}}[field_image]{{}}[field_du_an]{{}}[title]{{}}
[field_gia_bang_chu]{{}}[field_dien_tich_tim_tuong]{{}}
[field_dien_tich_thong_thuy]{{}}[field_so_giuong]{{}}
[field_so_phong_tam]{{}}[field_dien_tich_su_dung]-->
<div class="search-container">
  <div class="rld-main-search pd-0 box-shaw-un">
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-md-5 col-6">
            <div class="rld-single-select">
              <select name="field_gia_value" class="gia_thue_can_ho select single-select">
                <option value="1">Giá thuê</option>
                <option value="ASC">Tăng dần</option>
                <option value="DESC">Giảm dần</option>
              </select>
            </div>
          </div>
          <div class="col-md-5 col-6">
            <div class="rld-single-select">
              <select name="thoi_gian" value_need="created" class="thoi_gian_can_ho select single-select">
                <option value="1">Thời gian cập nhật</option>
                <option value="ASC">Tăng dần</option>
                <option value="DESC">Giảm dần</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <ul class="nav nav-tabs rld-search-page-tab float-sm-right">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabs_1"><i class="fa fa-th"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs_2"><i class="fa fa-list-ul"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="tab-content">
  <div class="tab-pane fade show active" id="tabs_1">
    <div class="row">
      <?php foreach ($rows as $id => $row):?>
      <?php $arr=explode('{{}}',$row);?>
        <div class="col-md-6">
          <div class="single-feature">
            <div class="thumb">
              <a href="<?=$arr[0]?>" class="d-block position-unset-img"><?=$arr[1]?></a>
            </div>
            <div class="details">
              <span><?=$arr[2]?></span>
              <h6 class="title"><?=$arr[3]?></h6>
              <h6 class="price">
                Giá : <span class="pri"><?=$arr[4]?></span> </h6>
              <?=$arr[5]?>
              <?=$arr[6]?>
              <ul class="info-list">
                <li><i class="fa fa-bed"></i><?=$arr[7]?> Phòng ngủ</li>
                <li><i class="fa fa-bath"></i> <?=$arr[8]?> Phòng WC</li>
                <li><img src="/sites/default/files/7_edit.png" alt="img"> <?php trim($arr[9])!='' ? print $arr[9].' m<sup>2</sup>' : print '0';?></li>
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach;?>
    </div>
  </div>
  <div class="tab-pane fade" id="tabs_2">
    <?php foreach ($rows as $id => $row):?>
      <?php $arr=explode('{{}}',$row);?>
      <div class="single-feature style-two">
        <div class="thumb">
          <a href="<?=$arr[0]?>" class="d-block position-unset-img"><?=$arr[1]?></a>
        </div>
        <div class="details">
          <div class="details-wrap">
            <span><?=$arr[2]?></span>
            <h6 class="title"><?=$arr[3]?></h6>
            <h6 class="price">
              Giá : <span class="pri"><?=$arr[4]?></span> </h6>
            <?=$arr[5]?>
            <?=$arr[6]?>
            <ul class="info-list">
              <li><i class="fa fa-bed"></i><?=$arr[7]?> Phòng ngủ</li>
              <li><i class="fa fa-bath"></i> <?=$arr[8]?> Phòng WC</li>
              <li><img src="/sites/default/files/7_edit.png" alt="img"> <?php trim($arr[9])!='' ? print $arr[9].' m<sup>2</sup>' : print '0';?></li>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>
