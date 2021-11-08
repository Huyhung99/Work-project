<section id="about-4" class="bg-lightgrey wide-40 services-section division">
  <div class="container">
    <h3 class="h3-md steelblue-color title-block text-center text-uppercase">Sản phẩm chính</h3>
    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-lg-4">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
