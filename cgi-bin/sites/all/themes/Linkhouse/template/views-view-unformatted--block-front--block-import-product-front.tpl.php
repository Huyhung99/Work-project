<section id="portfolio-3" class="portfolio-section-3">
    <div class="portfolio-content-3 position-relative clearfix">
        <?php $arr_unique = array()?>
        <?php foreach ($rows as $row):?>
            <?php
            $arr = explode('{{}}',$row);
            array_push($arr_unique,$arr);
            ?>
        <?php endforeach?>
        <?php $d = 0?>
        <?php for ($i = 0;$i < count($arr_unique)-1;$i++):?>
            <?php if ($arr_unique[$i][1] != $arr_unique[$i+1][1]):?>
                <?php print $arr_unique[$i][0]?>
                <?php $d++?>
            <?php endif;?>
            <?php if ($d==6){
                break;
            }?>
        <?php endfor;?>
    </div>
</section>