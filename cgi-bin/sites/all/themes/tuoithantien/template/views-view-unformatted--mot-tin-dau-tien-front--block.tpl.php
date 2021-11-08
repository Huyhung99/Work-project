<?php foreach ($rows as $id => $row): ?>
	<?php 	$arr = explode('{{}}', $row);  //0:image, 1: title, 2: created, 3: body= ?>
	<div class="block-first-new">
    <div class="block-image-postdate">
      <?=$arr[0];?>
      <div class="block-created">
        <?php $arr_date = explode('/', $arr[2]); ?>
        <?=getDateFromStr($arr_date);?>
      </div>
    </div>
		<div class="bottom-block-img-postdate white-bg">
      <h2 class="title-first-new-front"><?=$arr[1]?></h2>
      <p><?=$arr[3]?></p>
    </div>
	</div>
<?php endforeach; ?>
