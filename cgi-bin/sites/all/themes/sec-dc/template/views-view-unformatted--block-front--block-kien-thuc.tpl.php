
<section id="doctors-1" class="wide-40 doctors-section division">
  <div class="container">


    <!-- SECTION TITLE -->
    <div class="row">
      <div class="col-lg-10 offset-lg-1 section-title">
        <!-- Title 	-->
        <h3 class="h3-md steelblue-color text-uppercase text-center">Tin tức</h3>
      </div>
    </div>	 <!-- END SECTION TITLE -->


    <div class="row">
      <?php foreach ($rows as $id => $row): ?>
        <div class="col-md-6 col-lg-3 col-6">
          <?php print $row; ?>
        </div>
      <?php endforeach; ?>
    </div>	    <!-- End row -->

  </div>	   <!-- End container -->
</section>	<!-- END DOCTORS-1 -->
