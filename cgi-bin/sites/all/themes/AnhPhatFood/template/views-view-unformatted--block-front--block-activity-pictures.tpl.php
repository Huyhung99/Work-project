<!-- Case Study Section Start -->
<section class="case-study-section anim-object2  pdb-0 images-section pdb-sm-40">
    <div class="section-title mrb-20 mrt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title-left-part">
                        <h3 class="title">Hình ảnh hoạt động</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="container">
    <section class="pdl-15 pdr-15 pdt-15 pdb-15">
      <div class="section-content">
        <div class="row">
          <?php foreach ($rows as $row):?>
            <div class="col-md-6 col-6 col-lg-6 col-xl-3">
              <?php print $row?>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>
  </div>
</section>
<!-- Case Study Section End -->
