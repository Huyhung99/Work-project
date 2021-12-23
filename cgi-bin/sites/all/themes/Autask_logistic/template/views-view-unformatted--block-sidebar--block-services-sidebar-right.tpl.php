<?php
    global $language;
    if ($language->language == 'vi'){
        $head_title = 'DỊCH VỤ';
    }else{
        $head_title = 'SERVICES';
    }
?>
<div class="widget  widget_categories">
    <h4><?=$head_title?></h4>
    <ul>
        <?php foreach ($rows as $row):?>
            <?php print $row?>
        <?php endforeach;?>
    </ul>
</div>
<div class="mt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>