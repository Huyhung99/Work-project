
<div class="client-reviews-area">
  <div class="container-fluid">
    <div class="row products-container">
      <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
        <div class="client-reviews-left">
          <img class="img-responsive" src="http://minhhientea.com/sites/all/themes/rozaluta/assets/img/tra-xanh.jpg" alt="client">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
        <div class="client-reviews-right">
          <h2>Tác dụng của trà xanh</h2>
          <div class="rc-carousel"
               id="block-tac-dung-tra-xanh"
               data-loop="true"
               data-items="3"
               data-margin="30"
               data-autoplay="false"
               data-autoplay-timeout="10000"
               data-smart-speed="2000"
               data-dots="false"
               data-nav="false"
               data-nav-speed="false"
               data-r-x-small="1"
               data-r-x-small-nav="false"
               data-r-x-small-dots="true"
               data-r-x-medium="1"
               data-r-x-medium-nav="false"
               data-r-x-medium-dots="true"
               data-r-small="1"
               data-r-small-nav="false"
               data-r-small-dots="true"
               data-r-medium="1"
               data-r-medium-nav="false"
               data-r-medium-dots="true">
            <?php foreach ($rows as $id => $row): ?>
            <ul>
              <li>
                <?php print $row; ?>
              </li>
            </ul>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
