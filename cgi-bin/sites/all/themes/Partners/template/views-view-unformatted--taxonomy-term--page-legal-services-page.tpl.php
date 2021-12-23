<?php
    global $language;
    if ($language->language == "vi"){
        $path_title = "Xem thêm";
    }else if ($language->language == "en"){
        $path_title = "Read More";
    }

?>
<div class="thumb-services-area shadow bottom-less">
    <div class="thumb-services-items text-light">
        <div class="row">
            <?php foreach ($rows as $row): ?>
                <?php
                    $arr = explode('{{}}',$row);
                    $body = $arr[0];
                    $image = $arr[1];
                    $path = $arr[2];
                    $title = $arr[3];
                ?>
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item" style="background-image: url(<?=$image?>);">
                        <div class="content">
                            <div class="inner">
                                <h4><?=$title?></h4>
                            </div>
                            <div class="link">
                                <a class="btn circle btn-theme effect btn-sm" href="<?=$path?>"><?=$path_title?> <i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


