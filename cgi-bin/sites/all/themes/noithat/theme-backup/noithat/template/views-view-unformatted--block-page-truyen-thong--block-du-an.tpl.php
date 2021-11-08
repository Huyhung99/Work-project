<!--[title]{{}}[path]{{}}[field_image]-->
<div class="wrap-project">
  <?php foreach ($rows as $row): ?>
    <?php $row = explode('{{}}', $row); ?>
    <div class="item-project white ani-item">
      <a href="<?= $row[1]?>" class="link-load">
        <div class="pic-project">
          <div class="pic-img"><img
              src="<?= $row[2]?>"
              alt="<?= $row[0]?>"></div>
        </div>
        <div class="txt-project"><span><?= t('Project')?></span>
          <h3><?= $row[0]?></h3></div>
      </a>
    </div>
  <?php endforeach; ?>
</div>
