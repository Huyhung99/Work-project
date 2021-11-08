
<div class="container">
    <div class="owl-carousel owl-theme ban-giao-vien-mobile">
        <?php
        $i = 1;
        foreach ($rows as $id => $row):

            if ($i==1||$i%3==0){
                echo '<div class="item-giao-vien">';
            }?>

            <?php print $row?>
            <?php
            if ($i==2||$i%4==0){
                echo '</div>';
            }
            $i++;
            ?>

        <?php endforeach; ?>
    </div>
</div>
