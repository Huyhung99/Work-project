<!--[title]{{}}[body]{{}}[field_image]{{}}[path]-->
<section class="mystories-block services-section division">
  <div class="bg-white content-mystories">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <p class="title-block-mystories text-center">
            <img src="/sites/default/files/cachdayconcuachungtoi.jpg" class="my-stories-img-header" title="Câu chuyện của chúng tôi"/>
          </p>
          <!-- SERVICES CONTENT -->
          <div class="quocte-mystories">
            <div class="tab-content">
              <?php
              $i = 0;
              foreach ($rows as $id => $row):
                $arr = explode("{{}}",$row);
                $title = $arr[0];
                $body = $arr[1];
                $field_image = $arr[2];
                $path = $arr[3];
                ?>
                <?php if ($i==0 ){
                $active = 'show active';
              }else{
                $active = '';
              }?>
                <div class="item-mystories-item pd-0 tab-pane fade in <?=$active?>" id="tab-cau-chuyen-<?=$i?>" >
                  <h2 class=" text-white text-center title-rating-student-parent"><?=$title?></h2>
                  <p class="text-justify"><?=$body?></p>
                </div>
                <?php
                $i++;
              endforeach;
              ?>
            </div>
            <!-- END SERVICES CONTENT -->
            <p class="icon-mystories"><i class="fas fa-quote-right"></i></p>
          </div>

        </div>	   <!-- End container -->
        <!-- END SERVICES-3 -->
        <div class="col-md-6">
          <ul class="nav nav-tabs " id="tab-cau-chuyen-cua-toi">
            <?php
            $i=0;
            foreach ($rows as $id => $row):
              $arr = explode("{{}}",$row);
              $title = $arr[0];
              $body = $arr[1];
              $field_image = $arr[2];
              $path = $arr[3];
              ?>
              <li class="inner-img-radius"><a data-toggle="tab" href="#tab-cau-chuyen-<?=$i?>"><?=$field_image?></a></li>
              <?php $i++;endforeach;?>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>





