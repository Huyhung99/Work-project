<div class="features-sec">
  <div class="container">
    <div class="row nagative_margin">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
          <?php
            $arr_content = explode('||', $row);
            print str_replace('{{field_ico}}', html_entity_decode($arr_content[1]), $arr_content[0]);
          ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<div class="techno_flipbox mb-30">
    <div class="techno_flipbox_font">
        <div class="techno_flipbox_inner">
            <div class="techno_flipbox_icon">
                <div class="icon"> {{field_ico}} </div>
            </div>
            <div class="flipbox_title">
                <h3>[title]</h3>
            </div>
        </div>
    </div>
    <div class="techno_flipbox_back">
        <div class="techno_flipbox_inner">
            <div class="flipbox_title">
                <h3>[title]</h3>
            </div>
            <div class="flipbox_desc">
                <p>[body]</p>
            </div>
        </div>
    </div>
</div>||[field_ico]
