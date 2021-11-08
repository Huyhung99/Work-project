<?php
?>
<?php foreach ($rows as $id => $row):
  $arr = explode('{{}}',$row)?>
  <?php $field_image = trim($arr[0])?>
  <?php $name = trim($arr[4])?>
  <?php $body = trim($arr[2])?>
  <?php $path = trim($arr[3])?>
<?php endforeach;?>
<div class="client-reviews-area">
    <div class="container-fluid">
        <div class="row products-container m-0">
            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                <div class="client-reviews-left">
                    <img class="img-responsive" src="http://rozaluta.com/sites/default/files/20-left-back.jpg" alt="client">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                <div class="client-reviews-right">
                    <h2 class="text-uppercase">Đánh giá khách hàng</h2>
                    <div class="rc-carousel"
                         data-loop="true"
                         data-items="100"
                         data-margin="30"
                         data-autoplay="false"
                         data-autoplay-timeout="10000"
                         data-smart-speed="2000"
                         data-dots="false"
                         data-nav="false"
                         data-nav-speed="false"
                         data-r-x-small="1"
                         data-r-x-small-nav="false"
                         data-r-x-small-dots="true"
                         data-r-x-medium="1"
                         data-r-x-medium-nav="false"
                         data-r-x-medium-dots="true"
                         data-r-small="1"
                         data-r-small-nav="false"
                         data-r-small-dots="true"
                         data-r-medium="1"
                         data-r-medium-nav="false"
                         data-r-medium-dots="true">
<!--                        [field_image]{{}}[field_nguoi_nhan_xet]{{}}[body]{{}}[path]-->
                      <?php $i=0;?>
                      <?php foreach ($rows as $id => $row):
                        $arr = explode('{{}}',$row)?>
                        <?php $field_image = trim($arr[0])?>
                        <?php $name = trim($arr[4])?>
                        <?php $body = trim($arr[2])?>
                        <?php $path = trim($arr[3])?>
                        <?php if ($i==0 ||$i%2 ==0):?>
                        <ul>
                      <?php endif;?>

                        <li>
                          <div class="media">
                            <a href="<?=$path?>" class="pull-left">
                              <?=$field_image?>
                            </a>
                            <div class="media-body">
                              <h3><?=$name?></h3>
                              <p><?=$body?></p>
                            </div>
                          </div>
                        </li>
                        <?php $i++; if ($i%2==0):?>
                        </ul>
                      <?php endif;?>
                      <?php endforeach;?>
                    </div>
                    <div class="testimonial-1 mt-60">
                        <h2 class="text-uppercase">Để lại Đánh giá của bạn tại đây</h2>
                        <a href="node/add/phan-hoi-khach-hang" target="_blank" class="btn-testimonial">Đánh giá</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--                        [field_image]{{}}[field_nguoi_nhan_xet]{{}}[body]{{}}[path]-->
