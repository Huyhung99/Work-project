<?php $a=[0=>'<i class="far fa-handshake"></i>',1=>'<i class="fa fa-check-square-o"></i>',2=>'<i class="fa fa-address-book-o" aria-hidden="true"></i>'];?>
<!-- Banner Area Start -->
<div class="banner-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12"><h1 class="text-center mb-20 title font-sime-bold title_front_chuan">TẠI SAO BẠN NÊN LỰA CHỌN CHÚNG TÔI ?</h1></div>
      <?php foreach ($rows as $id => $row): ?>
        <?php $arr= explode('{{}}',$row); ?>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <a href="<?php print $arr[0]?>" title="<?php print $arr[1]?>">
          <div class="single-banner d-flex">
            <div class="block-icon-gioi-thieu">
              <div class="icon-gioi-thieu">
                <?= $a[$id];?>
              </div>
            </div>
            <div class="block-icon-gioi-thieu">
              <h2><?php print $arr[1]?></h2>
            </div>
          </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Banner Area End -->
<!--<a href="[path]" title="[title]"><h2>[title]</h2></a>-->
