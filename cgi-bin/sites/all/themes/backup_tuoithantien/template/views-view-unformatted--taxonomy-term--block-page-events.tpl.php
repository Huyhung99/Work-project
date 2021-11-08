<div class="grid-container">

<?php
    $i = 1;
    foreach ($rows as $id => $row):
        $arr = explode('{{}}',$row);
        $field_image = trim($arr[0]);
        $title = trim($arr[1]);
        $path = trim($arr[2]);
        $body = trim($arr[3]);
        $field_image_1 = trim($arr[4]);
        ?>
        <!--    --><?php //if ($i==0||$i%3==0):?><!--<div class="row">--><?php //endif;?>
            <?php if ($i==1||$i%4==0):?>
            <div class="item1">
                <?php endif;?>

                <?php if ($i==2||$i%2==0):?>
            <div class="item2">
                <?php endif;?>

                <?php if ($i==3||$i%3==0):?>
            <div class="item3">
                <?php endif;?>
                <div class="block-first-new sm-block">
                    <div class="block-image-postdate">
                        <?=$field_image?>
                        <div class="block-created">
                            tháng một, 11, 2021
                        </div>
                    </div>
                    <div class="bottom-block-img-postdate white-bg">
                        <h2 class="title-fours-new-front"><a href="<?=$path?>"><?=$title?></a></h2>
                        <p><?=$body?></p>
                    </div>
                </div>
                <?php if ($i==1||$i%4==0):?>
                    </div>
                <?php endif;?>
                <?php if ($i==2||$i%2==0):?>
                    </div>
                <?php endif;?>
                <?php if ($i==3||$i%3==0):?>
                    </div>
                <?php endif;?>
        <!--    --><?php //if ($i%3==0):?><!--</div>--><?php //endif;?>
        <?php
        $i++;
    endforeach;
    ?>
</div>