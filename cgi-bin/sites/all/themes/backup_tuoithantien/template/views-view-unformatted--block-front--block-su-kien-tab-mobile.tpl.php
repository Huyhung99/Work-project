<?php $arrColor = [
    'blue', 'green', 'red', 'green2', 'blue', 'orange'
] ?>
<?php foreach ($rows as $id => $row): ?>
    <?php $arr = explode('{{}}',  $row);  //[field_image]{{}}[title]{{}}[created]{{}}[body]{{}}[field_image_1]?>
    <?php $arr_date = explode('/', $arr[2]); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="bg-gray bbright-rad-10 bbleft-rad-10 mb-30">
                    <div class="block-image-postdate">
                        <?=$arr[0];?>
                        <div class="block-created bg-<?=$arrColor[$id] ?>">
                            <?=getDateFromStr($arr_date);?>
                        </div>
                    </div>
                    <div class="bottom-block-img-postdate gray-bg pd-20 pt-0 ">
                    <h2 class="title-first-new-front-sm mb-20"><?=$arr[1]?></h2>
                    <p><?=$arr[3]?></p>
                </div>
            </div>
        </div>
        </div>
<?php endforeach; ?>
