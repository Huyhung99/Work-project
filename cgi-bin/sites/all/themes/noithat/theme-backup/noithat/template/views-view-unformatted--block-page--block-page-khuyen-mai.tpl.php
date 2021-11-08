<div class="wrap-promotion">
  <?php foreach ($rows as $row): ?>
    <?php $row = explode('{{}}', $row); ?>
    <div class="content-promotion grey">
      <div class="pic-promotion ani-item"><a class="link-load"
                                             href="<?=$row[2]?>"><img
            src="<?=$row[1]?>"
            alt="MUA 1 TẶNG 1 - CHỐT NHANH KẺO LỠ"></a></div>
      <div class="text-promotion ani-item"><h3><?=$row[0]?></h3><a
          class="view-more"
          href="<?=$row[2]?>"><?php print t('xem chi tiết')?></a></div>
    </div>
  <?php endforeach; ?>
</div>
