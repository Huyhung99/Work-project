<nav class="navbar navbar-area navbar-expand-lg navbar-light bg-blue menu-map">
  <div class="logo mr-30">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    <?php endif; ?>
  </div>
  <button class="navbar-toggler toggle-btn mt-5px" type="button">
    <span class="icon-left"></span>
    <span class="icon-right"></span>
  </button>
  <div class="pl-10 collapse navbar-collapse hidden-sm" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white" id="basic-addon1"><i class="fa fa-search"></i></span>
        </div>
        <input class="form-control modified input-search-map" placeholder="Nhập địa chỉ, tọa độ cần tra cứu">
      </div>
      <a id="btn-loc-bds">
        <i class="fas fa-filter"></i> Lọc tin BĐS
      </a>
    </form>
    <div class="noi_hien_thi_form"></div>
    <div class="menu_2_trang_chu">
      <?php print getMenu2LeMinhLand();?>
    </div>
  </div>
</nav>
<div class="chuyen_vi_tri d-none">
  <div class="ktra_form" id="TimKiemSPPC">
    <div class="d-flex">
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Phân loại
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
          <a class="dropdown-item" href="#">Mua bán</a>
          <a class="dropdown-item" href="#">Cho thuê</a>
          <a class="dropdown-item" href="#">Dự án</a>
        </div>
      </div>
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Loại hình
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
          <a class="dropdown-item" href="#">Nhà - đất thổ cư</a>
          <a class="dropdown-item" href="#">Nhà - đất dự án</a>
          <a class="dropdown-item" href="#">Nhà - đất nông nghiệp</a>
        </div>
      </div>
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Giá tiền
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="drop-gia-tien">
          <form class="px-3 py-2">
            <div class="form-check">
              <label class="form-check-label" for="thoa-thuan">
                <input type="checkbox" class="form-check-input" value="Thỏa thuận" id="thoa-thuan"> Thỏa thuận
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label" for="tu0den2">
                <input type="checkbox" class="form-check-input" value="0 - 2" id="tu0den2">
                <= 2 triệu
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown mr-3">
        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Diện tích
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
          <form class="px-3 py-2">
            <div class="form-check">
              <label class="form-check-label" for="duoi20">
                <input type="checkbox" class="form-check-input" value="0 - 2" id="duoi20">
                < 20 m²
              </label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<input type="hidden" id="san-pham-tim-kiem" value="<?=implode(',', isset($_SESSION['san_pham']) ? $_SESSION['san_pham'] : [])?>">
<?php print $messages;?>

<div class="modal" tabindex="-1" role="dialog" id="my-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thông báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php print $messages;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng lại</button>
      </div>
    </div>
  </div>
</div>


<div id="mapid"></div>
<div class="text-center fad-box gg-earth" data-toggle="tooltip" title="Chế độ xem bản đồ">
  <span class=""><i class="fa fa-globe"></i></span>
</div>
<button class="custom-map-control-button" tabindex="0"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
