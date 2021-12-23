<?php
    global $language;
    if ($language->language == 'vi'){
        $head_title = "TIN TỨC";
        $path_news = '/vi/chuyen-muc/tin-tuc';
        $title_path = 'XEM THÊM';
    }else{
        $head_title = "NEWS";
        $path_news = '/en/categories/news';
        $title_path = 'READ MORE';
    }
?>
<div class="news bg-gray">
    <div class="container">
        <div class="section-head text-center ">
            <h2 data-title="<?=$head_title?>"><?=$head_title?></h2>
            <div class="mt-separator-outer">
                <div class="mt-separator bg-primary"></div>
            </div>
        </div>
        <div class="row">
            <?php $i = 0;?>
            <?php foreach ($rows as $id => $row): ?>
                <?php $arr = explode('{{}}',$row);
                $title = trim($arr[0]);
                $field_image = trim($arr[1]);
                $path = trim($arr[2]);
                $created = trim($arr[4]);
                $author = trim($arr[5]);
                ?>
                <div class="col-md-4">
                    <div class="item-news">
                        <?=$field_image?>
                        <div class="content-news">
                            <h3 class="title"><?=$title?></h3>
                            <span><?=$created?> | <?=$author?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center p-t30">
            <a href="<?=$path_news?>" class="site-button"><?=$title_path?></a>
        </div>
    </div>
</div>

