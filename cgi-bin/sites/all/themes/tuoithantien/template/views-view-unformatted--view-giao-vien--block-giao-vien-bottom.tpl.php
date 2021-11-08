<div id="demo_giao_vien" class="carousel slide" data-ride="carousel">
  <div class="container position-relative">
  <!-- Indicators -->

  <!-- The slideshow -->

    <div id="doi-ngu-giao-vien">
      <div class="carousel-inner">
        <?php $dem=0;?>
        <?php foreach ($rows as $id => $row): ?>
      <?php if($id%4==0):?>
      <?php if($id!=0) print '</div></div>'?>
        <div class="carousel-item <?php if($id==0) print 'active'?>">
          <div class="row">
            <?php endif;?>
            <div class="col-md-3 col-sm-6">
              <?php print $row; ?>
            </div>
            <?php $dem++;?>
            <?php endforeach; ?>
        <?php if($dem%4!=0) print '</div></div>'?>
      </div>
    </div>
        <a class="carousel-control-prev" href="#demo_giao_vien" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo_giao_vien" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
</div>
</div>

