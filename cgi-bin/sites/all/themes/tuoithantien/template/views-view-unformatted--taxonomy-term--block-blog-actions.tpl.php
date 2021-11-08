<div class="row">
<?php
$i = 0;

foreach ($rows as $id => $row):
    $arr = explode('{{}}',$row);
    $field_image = trim($arr[0]);
    $title = trim($arr[1]);
    $path = trim($arr[2]);
?>
<!--    --><?php //if ($i==0||$i%3==0):?><!--<div class="row">--><?php //endif;?>
        <div class="col-md-4">
            <div class="blog-post">
            <!-- BLOG POST IMAGE -->
                <div class="blog-post-img">
                    <a href="<?=$path?>">
                        <?=$field_image?>
                    </a>
                </div>
            <!-- BLOG POST TITLE -->
                <div class="blog-post-txt">

                    <!-- Post Title -->
                    <h5 class="font-16 title-blog ptb-10 plr-20"><a href="<?=$path?>"><?=$title?></a></h5>
                </div>

            </div>	<!-- END BLOG POST #1 -->
        </div>
<!--    --><?php //if ($i%3==0):?><!--</div>--><?php //endif;?>
<?php
    $i++;
    endforeach;
?>
</div>

