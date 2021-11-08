<ul>
    <?php $i = 0 ?>
    <?php foreach ($rows as $id => $row):?>
        <?php $arr = explode('{{}}',$row)?>
        <?php $title = trim($arr[0])?>
        <?php $image = trim($arr[1])?>
        <?php $path = trim($arr[2])?>
        <?php if ($i==0):?>
            <div class="image-news">
                <?=$image?>
            </div>
            <li class="title-news">
                <h4><a class="text-blue" href="<?=$path?>" title="<?=$title?>"><?=$title?></a></h4>
            </li>
        <?php else:?>
            <li class="title-news">
                <h4><a href="<?=$path?>" title="<?=$title?>"><?=$title?></a></h4>
            </li>
        <?php
        endif;
        ?>
        <?php $i++?>
    <?php endforeach;?>
</ul>
