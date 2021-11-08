<!--[title]{{}}[field_image]{{}}[path]-->
<section class="load-news-list set-post show on-show" style="opacity: 1;">
  <div class="news-list-padding">
    <div class="title-main grey ani-item on-show on-view"><h2><?php print t('Danh sách tin')?></h2></div>
    <div class="content-column ani-item on-show on-view">
      <div class="wrap-content">
        <div class="news-list">
          <?php foreach ($rows as $row):?>
            <?php $row=explode('{{}}',$row);?>
            <div class="news-item ani-item on-show on-view"><a
              class="link-load"
              href="<?=$row[2]?>"
              data-details="news-detail-564"
              data-title=" 9 TIỆN ÍCH Ở DỰ ÁN NINE SOUTH ESTATES "
              data-description="" data-keyword="">
              <div class="pic-img news-pic"
                   style="background-image: url(<?= $row[1]?>);">
                <img
                  src="<?php echo $row[1]?>"
                  alt="<?php print $row[0]?>"></div>
              <div class="news-txt"><h3><?php print $row[0]?></h3></div>
            </a></div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>
</section>
