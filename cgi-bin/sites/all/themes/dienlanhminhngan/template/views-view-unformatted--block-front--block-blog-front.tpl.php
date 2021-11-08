<!--[title]{{}}[body]{{}}[field_image]{{}}[path]{{}}[field_image_1]-->
<div class="section-full bg-white p-t30">
    <div class="container">
        <div class="section-head text-center ">
            <h2 class="h2">TIN TỨC</h2>
            <div class="dez-separator-outer ">
                <div class="dez-separator style-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
            </div>
        </div>
      <?php $abc='';?>
      <?php foreach ($rows as $id => $row):?>
        <?php if($id==0)
        {
          $abc=explode('{{}}',$row);
        }
        ?>
      <?php endforeach;?>
        <div class="section-content display-none-mb">
            <div class="row">
              <div class="col-lg-7 col-md-6 m-b30">
                <div class="border_background">
                  <div class="row">
                    <div class="col-md-7"><a href="<?php print $abc[3]?>"><?php print $abc[4]?></a></div>
                    <div class="col-md-5">
                      <h4 class="dez-title m-tb0"><a href="<?php print $abc[3]?>" title="<?php print $abc[0]?>"><?php print $abc[0]?></a></h4>
                      <p class="m-t10 m-b0"><?php print $abc[1]?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 m-b30">
                <div class="row">
                  <?php foreach ($rows as $id => $row):?>
                  <?php ?>
                    <?php if($id>0):
                      $abc=explode('{{}}',$row);
                      ?>
                      <div class="col-md-12 mb-10">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="dez-media"><a href="<?php print $abc[3]?>"><?php print $abc[2]?></a></div>
                          </div>
                          <div class="col-md-8">
                            <div class="dez-box">
                              <h4 class="dez-title"><a href="<?php print $abc[3]?>" title="<?php print $abc[0]?>"><?php print $abc[0]?></a></h4>
                              <p class="m-t10 m-b0"><?php print $abc[6]?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif;?>
                  <?php endforeach;?>
                </div>
              </div>
            </div>
        </div>
      <div class="section-content display-none-pc">
        <div class="row">
          <div class="col-lg-12 col-md-6 m-b30">
            <?php foreach ($rows as $id => $row):?>
              <?php ?>
              <?php if($id>=0):
                $abc=explode('{{}}',$row);
                ?>
                <div class="border_background mt-20">
                  <div class="row">
                    <div class="col-md-7"><a href="<?php print $abc[3]?>"><?php print $abc[4]?></a></div>
                    <div class="col-md-5">
                      <h4 class="dez-title m-tb0"><a class="mt-10 d-block" href="<?php print $abc[3]?>" title="<?php print $abc[0]?>"><?php print $abc[0]?></a></h4>
                      <p class="m-t10 m-b0"><?php print $abc[1]?></p>
                    </div>
                  </div>
                </div>
              <?php endif;?>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
</div>


