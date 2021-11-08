<?php
/** 11/28/2019 9:38 PM**/
/** Admin **/
/** drupal-7.65 **/
?>
<section id="home">
      <div class="container-fluid p-0">
        <div class="owl-carousel-1col" data-nav="true">
            <?php foreach ($rows as $id => $row): ?>
                <div class="item">
                    <?php print $row ?>
              </div>
            <?php endforeach; ?>
        </div>
      </div>
    </section>

