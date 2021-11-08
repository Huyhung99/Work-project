
<!--[field_image]{{}}[name]{{}}[field_mo_ta_slider]-->


<div class="services pb-30" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-20 text-center">
                <h1 class="title text-green">Dịch vụ lifespace cung cấp</h1>
            </div>
            <?php $i = 0; ?>
            <?php foreach ($rows as $id => $row): ?>
                <?php
                intval($i++);
            $arr = explode('{{}}',$row) ;
                $field_image = trim(strip_tags($arr[0]));
                $name = trim($arr[1]);
                $noi_dung = trim($arr[2]);
                ?>
            <div class="col-md-4">
                <div class="item bg-1" style="background-image: url('<?=$field_image?>')" >
                    <div class="con">
                        <h5><?=$name?></h5>
                        <p><?=$noi_dung?></p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>


