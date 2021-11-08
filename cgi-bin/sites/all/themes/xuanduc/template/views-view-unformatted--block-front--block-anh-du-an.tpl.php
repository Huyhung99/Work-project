<section class="projects-section-five">
    <div class="line-shape">
        <span class="line-one"></span>
        <span class="line-two"></span>
        <span class="line-three"></span>
        <span class="line-four"></span>
    </div>
    <div class="auto-container">
        <div class="sec-title style-two text-center">
            <h2>DỰ ÁN ĐÃ THỰC HIỆN</h2>
            </div>
        <div class="row">
            <?php $i=0; $arr =[3,6,3,4,4,4]?>
            <?php foreach ($rows as $id => $row): ?>
                <div class="col-lg-<?=$arr[$id]?> project-block-five">
                    <div class="inner-box">
                        <?php print $row; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
