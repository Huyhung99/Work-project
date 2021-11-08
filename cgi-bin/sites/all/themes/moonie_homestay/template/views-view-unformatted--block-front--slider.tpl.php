<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php foreach ($rows as $id => $row): ?>
            <div class="item <?=$id == 0 ? 'active' : ''?>">
                <?php print $row; ?>
            </div>
        <?php endforeach; ?>

    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev"></a>
    <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next"></a>
</div>


