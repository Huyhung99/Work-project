<!--[body]{{}}[field_image]{{}}[title]{{}}[path]{{}}[created]-->
<div class="rs-courses-list">
    <?php foreach ($rows as $row):?>
        <div class="course-item pr-15 pl-15">
            <div class="row pt-15 pb-15">
                <?php $arr=explode('{{}}',$row);?>
                <div class="col-md-4">
                    <div class="course-img">
                        <?php print $arr[1];?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="course-header">
                        <h3 class="course-title"><?php print ($arr[2]);?></h3>
                    </div>
                    <div class="course-body">
                        <p>
                            <?php print $arr[0];?>
                        </p>
                        <div class="course-button">
                            <a href="<?php print $arr[3];?>">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
