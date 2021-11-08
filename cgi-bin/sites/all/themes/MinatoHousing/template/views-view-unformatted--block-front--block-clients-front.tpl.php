<div class="client-area pb-30">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title text-primary">ĐỐI TÁC</h2>
        </div>
        <div class="client-slider">
            <?php foreach ($rows as $row):?>
            <div class="item">
                <div class="thumb">
                    <?php print $row?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>