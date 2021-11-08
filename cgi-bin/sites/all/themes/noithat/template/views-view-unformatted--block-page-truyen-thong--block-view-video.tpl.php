<section class="interior-list set-post" data-post="interior-2">
  <div class="title-main grey text-ani-item"><h2><?=t('Documentary')?></h2></div>
  <div class="wrap-content-large">
    <div class="slide-video slide-two white ani-item">
      <?php foreach ($rows as $row): ?>
        <?php $row = explode('{{}}', $row); ?>
        <div class="video-thumb">
          <div class="video_news"><?php print $row[1] ?></div>
          <div class="title-pic"><h3><?php print $row[0] ?></h3></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
