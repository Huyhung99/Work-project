<?php
global $language ;
$lang_name = $language->language ;
?>
<div class="content-main grey">
    <div class="box-news-home">
        <div class="title-main">
            <?php if ($lang_name == 'vi'):?>
                <h2>Tin tức</h2>
            <?php elseif ($lang_name == 'en'):?>
                <h2>News</h2>
            <?php endif;?>
        </div>
        <div class="slider-news">
            <?php $i = 0?>
            <?php foreach ($rows as $row):?>
                <?php $arr = explode('{{}}',$row);
                $title = trim($arr[0]);
                $image = trim($arr[1]);
                $path = trim($arr[2]);
                ?>
                <?php switch ($i){
                    case 0:
                        $path_img = image_style_url('1500_x_1000',$image);
                        break;
                    case 1:
                        $path_img = image_style_url('1220_x_1000',$image);
                        break;
                    case 2:
                        $path_img = image_style_url('1000_x_650',$image);
                        break;
                }?>
                <div class="item-news-home">
                    <div class="pic-news-home">
                        <div class="pic-img" style="background-image: url('<?=$path_img?>')">
                            <img src="<?=$path_img?>" alt="<?=$title?>" title="<?=$title?>">
                        </div>
                    </div>
                    <div class="txt-news-home">
                        <?php if ($lang_name == 'vi'):?>
                            <h3><?=$title?></h3>
                            <a class="view-more" href="<?=$path?>">xem thêm</a>
                        <?php elseif ($lang_name == 'en'):?>
                            <h3><?=$title?></h3>
                            <a class="view-more" href="<?=$path?>">Read more</a>
                        <?php endif;?>

                    </div>
                </div>
                <?php $i++?>
            <?php endforeach;?>
        </div>
    </div>
</div>
