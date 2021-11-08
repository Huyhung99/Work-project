<div class="overview-area">
  <div class="container">
    <div class="text-title-center">
      <h2>
        <span><?php print t($view->get_title()); ?></span>
      </h2>
      <div class="border-bottom-ngang"></div>
    </div>
    <div class="overview-item">
      <div class="row">
        <?php foreach ($rows as $id => $row):?>
        <div class="col-lg-6 col-sm-6">
          <?php print $row?>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</div>
