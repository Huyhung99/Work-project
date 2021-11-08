<div class="search-container">
  <div class="rld-main-search pd-0 box-shaw-un">
    <div class="rld-single-select">
      <div class="row">
        <div class="col-md-4 col-6">
          <select name="field_khu_vuc_tid" class="khu_vuc_vid select single-select">
            <option value="1">Khu vực</option>
            <?php print khu_vuc();?>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <?php foreach ($rows as $row):?>
        <div class="col-md-4 col-6">
            <?php print $row?>
        </div>
    <?php endforeach;?>
</div>
