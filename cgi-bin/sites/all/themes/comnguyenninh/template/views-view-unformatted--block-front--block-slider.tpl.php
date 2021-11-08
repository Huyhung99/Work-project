
<!-- Home Design -->
<div class="ulockd-home-slider">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 ulockd-pmz">
        <div class="cd-hero">
          <ul class="cd-hero-slider autoplay">
            <?php foreach ($rows as $id => $row): ?>
              <?php
              $arr = explode('{{}}', $row);
              $field_image = trim($arr[0]);
              $field_headline = isset($arr[1]) ? trim($arr[1]) : '';
              $field_link = isset($arr[2]) ? trim($arr[2]) : '';
              $field_tagline = isset($arr[3]) ? trim($arr[3]) : '';

              ?>
              <li class="<?=$id == 0 ? 'selected' : ''?>" style='background-image: url("<?=$field_image?>") !important; background-size: auto'>
                <div class="cd-full-width">
                  <?= $field_headline!='' ? '<h2>'.$field_headline.'</h2>' : ''; ?>
                  <?= $field_tagline!='' ? '<h3>'.$field_tagline.'</h3>' : ''; ?>
                  <?= $field_link!='' ? '<a href="'.$field_link.'" class="cd-btn btn btn-default ulockd-btn-thm">Xem thêm</a>' : ''; ?>
                </div> <!-- .cd-full-width -->
              </li>
            <?php endforeach; ?>
          </ul> <!-- .cd-hero-slider -->

          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <?php foreach ($rows as $id => $row): ?>
                <?php
                $arr = explode('{{}}', $row);
                $field_image = trim($arr[0]);
                ?>
                  <li class="<?=$id == 0 ? 'selected' : ''?>">
                    <a href="#0" style="background: url(<?=$field_image?>) no-repeat 0 0;  background-size: cover;"></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </nav>
          </div> <!-- .cd-slider-nav -->
        </div>
      </div>
    </div>
  </div>
</div>
