<div class="news">
    <div class="grid">
        <?php $i = 1?>
        <?php foreach ($rows as $id => $row):?>
            <?php if ($i ==1):?>
                <div class="grid-left">
                    <?php print $row;?>
                </div>
            <?php endif;?>
            <?php if ($i==2):?>
                <div class="grid-right">
            <?php endif;?>
            <?php if ($i!=1):?>
                <?php print $row;?>
            <?php endif;?>
            <?php if ($i==4):?>
                </div>
            <?php endif;?>
            <?php $i++;?>
        <?php endforeach;?>
    </div>
</div>
