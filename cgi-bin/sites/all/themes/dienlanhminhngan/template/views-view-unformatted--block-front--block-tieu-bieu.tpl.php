<div class="section-full bg-white p-t30">
  <div class="container">
    <div class="section-head text-center ">
      <h2 class="h2">CÔNG TRÌNH TIÊU BIỂU</h2>
      <div class="dez-separator-outer ">
        <div class="dez-separator style-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <?php foreach ($rows as $id => $row):?>
          <div class="col-lg-3 m-b30">
            <?php print $row?>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</div>
