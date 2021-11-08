<?php $str='Đại hội thông qua nghị quyết thành lập Hiệp hội và các điều lệ hoạt động, đánh dấu tư cách pháp nhân và chính thức đi vào hoạt động'?>
<section class="request-a-call-back pdt-50 pdt-sm-50 pdb-110 pdb-lg-70" data-background="images/bg/abs-bg7.png">
  <div class="section-content">
    <h3 class="title_hoi_vien"><?php print $view->get_title();?></h3>
    <div class="owl-carousel testimonial-items-3col mrb-lg-40">
      <?php foreach ($rows as $row):?>
        <?php $ar=explode('{{}}',$row)?>
        <div class="testimonial-item">
          <?php print $ar[0];?>
          <h4 class="client-name"><?php print $ar[1]?></h4>
          <div class="testimonial-content">
            <p class="comments"><?php (isset($ar[2]) && strlen(trim(strip_tags($ar[2])))>5) ? print strip_tags($ar[2]) : print $str;?></p>
          </div>
        </div>
      <?php endforeach;?>
    </div>
  </div>
</section>
