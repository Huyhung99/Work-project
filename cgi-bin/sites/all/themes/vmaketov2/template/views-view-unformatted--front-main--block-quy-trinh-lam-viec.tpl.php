<!--[title]{{}}[body]{{}}[path]-->
<?php
$array=[0=>'<div class="icon"><i class="flaticon-research"></i></div>',
  1=>'<div class="icon"><i class="flaticon-design-process"></i></div>',
  2=>'<div class="icon"><i class="flaticon-development"></i></div>',
  3=>'<div class="icon"><i class="flaticon-analysis"></i></div>'
]
?>
<div class="process-area pt-100 pb-75">
  <div class="container">
    <div class="section-title text-center">
      <span>Đặc trưng</span>
      <h2><?php print $view->get_title();?></h2>
    </div>
    <div class="row justify-content-center">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-3 col-sm-6">
          <?php $arra=explode('{{}}',$row);?>
          <div class="single-process-card with-box-shadow">
            <?php print $array[$id];?>
            <h3>
              <?=$arra[0];?>
            </h3>
            <p><?=$arra[1];?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="process-shape-2" data-speed="0.08" data-revert="true">
    <img src="assets/images/process/shape-2.png" alt="image">
  </div>
  <div class="process-shape-3" data-speed="0.08" data-revert="true">
    <img src="assets/images/process/shape-3.png" alt="image">
  </div>
  <div class="process-shape-4" data-speed="0.08" data-revert="true">
    <img src="/sites/default/files/shape-4.png" alt="image">
  </div>
</div>
