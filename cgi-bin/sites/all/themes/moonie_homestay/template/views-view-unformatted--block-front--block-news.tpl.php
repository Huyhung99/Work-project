<?php
?>
<section class="news container b-padding">
    <div class="row">
        <header class="header col-xs-12 g-padding">
            <h2>Tin Tức</h2>
        </header>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <!-- carousel -->
            <div id="carousel-example-generic2" class="carousel slide news" data-ride="carousel">	<!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php foreach ($rows as $id => $row): ?>
                        <div class="item <?=$id == 0 ? 'active' : ''?>">
                            <?php print $row; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Indicators -->
                <div class="indicators col-sm-4">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic2" data-slide-to="1" ></li>
                        <li data-target="#carousel-example-generic2" data-slide-to="2" ></li>
                        <li data-target="#carousel-example-generic2" data-slide-to="3" ></li>
                        <li data-target="#carousel-example-generic2" data-slide-to="4" ></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>