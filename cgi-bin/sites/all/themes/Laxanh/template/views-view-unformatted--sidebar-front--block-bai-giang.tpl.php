<?php $dem=0; foreach ($rows as $id => $row): ?>
<?php $dem++;?>
<?php endforeach; ?>
<?php if($dem>=4):?>
<div id="demo1" class="carousel slide" data-ride="carousel">
  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php foreach ($rows as $id => $row): ?>
      <?php if($id%2==0):?>
      <?php if($id!=0) print '</div>'?>
        <div class="carousel-item <?php if($id==0) print 'active';?>">
      <?php endif;?>
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  <?php print '</div>'?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<?php else:?>
  <div id="demo1" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner">
      <?php $abc='';?>
      <?php foreach ($rows as $id => $row): ?>
        <?php if($id%2==0):?>
          <?php if($id!=0) print '</div>'?>
          <div class="carousel-item <?php if($id==0) print 'active';?>">
        <?php endif;?>
        <?php $abc=$row; print $row; ?>
      <?php endforeach; ?>
        <?php if($dem%2==0) print '</div>'?>
        <?php if($dem%2!=0):?>
          <?php print $abc; ?>
          <?php print '</div>'?>
        <?php endif;?>
            <div class="carousel-item">
      <?php for($i=0;$i<2;$i++):?>
        <?php print $abc; ?>
        <?php endfor;?>
            </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo1" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo1" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>
<?php endif;?>
