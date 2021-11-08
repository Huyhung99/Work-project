<div class="display-none-mb">
  <h2 class="title-tuyendung-thongtin">Vị trí đang tuyển dụng</h2>
  <div class="row">
    <div class="block-tuyen-dung">
      <div class="container-flex">
        <?php foreach ($rows as $id => $row): ?>
        <?php $tuyendung=explode('{{}}',$row)?>
          <div class="item item-<?=($id+1)?>">
            <div class="img-tintuyendung"><?=$tuyendung[0]?><p class="absolute"><i class="fas fa-images"></i></p></div>
            <p class="img-title-tintuyendung"><?=$tuyendung[1]?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<div class="display-none-pc tuyen_dung_dmb">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#tin_tuyen_dung">Tin tuyển dụng</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#dki">Đăng ký ứng tuyển</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane container active" id="tin_tuyen_dung">
      <div id="demotuyendung" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
          <?php $demnode=0;?>
          <?php foreach ($rows as $id => $row): ?>
            <?php $tuyendung=explode('{{}}',$row)?>
          <?php if($id%3==0):?>
            <?php if($id!=0) print '</div>'?>
            <div class="carousel-item <?php if($id==0) print 'active'?>">
              <?php endif;?>
              <div class="one-block-slider-md">
                <div class="row">
                  <div class="col-5">
                    <div class="img-slider-tdmb">
                      <?=$tuyendung[0]?>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="chitiet-slider-tuyendung">
                      <h3><?=$tuyendung[1]?></h3>
                      <p><?=$tuyendung[2]?></p>
                    </div>
                  </div>
                </div>
              </div>
          <?php $demnode++?>
          <?php endforeach; ?>
          <?php if($demnode%3!=0) print '</div>'?>
        </div>

        <!-- Left and right controls -->
          <div class="control-left-r">
            <a class="carousel-control-prev" href="#demotuyendung" data-slide="prev">
              <i class="far fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#demotuyendung" data-slide="next">
              <i class="far fa-angle-right"></i>
            </a>
          </div>

      </div>
    </div>
    <div class="tab-pane container fade" id="dki">...</div>
  </div>
</div>


