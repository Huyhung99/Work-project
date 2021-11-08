<div class="product-front"><h2><span>TIN MỚI NHẤT</span></h2></div>
<div class="row">
    <?php $a=0;?>
  <?php foreach ($rows as $id => $row): ?>
    <div class="col-md-3 <?php if($a!=0) print 'display-none-mb'?>">
      <?php print str_replace('<li>', '<li><i class="fas fa-angle-right"></i>', $row); ?>
    </div>
  <?php $a++;?>
  <?php endforeach; ?>
</div>
