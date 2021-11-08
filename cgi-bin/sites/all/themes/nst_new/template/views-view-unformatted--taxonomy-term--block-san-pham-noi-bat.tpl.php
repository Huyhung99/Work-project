<h3 class="single-blog-widget-title"><?php print $view->get_title()?></h3>
<section class="feature-section pdt-15 pdb-50 bg-silver-light bg-no-repeat" data-background="images/bg/abs-bg5.png">
  <div class="pdl-15 pdr-15">
    <div class="row">
      <?php foreach ($rows as $row):?>
        <div class="col-md-6 col-xl-4">
          <?php print $row?>
        </div>
      <?php endforeach;?>
    </div>
  </div>
</section>
