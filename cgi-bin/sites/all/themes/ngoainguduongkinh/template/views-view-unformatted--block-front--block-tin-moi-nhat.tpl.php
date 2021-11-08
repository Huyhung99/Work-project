<!-- Section: blog -->
<section id="blog">
  <div class="container pb-70">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
          <h2 class="mt-0 line-height-1 text-center">Tin mới nhất</h2>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <?php foreach ($rows as $id => $row): ?>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <?php print $row; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
