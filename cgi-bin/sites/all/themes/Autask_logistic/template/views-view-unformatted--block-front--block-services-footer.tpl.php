<?php
global $language;
if ($language->language == 'vi'){
    $head_title = 'DỊCH VỤ';
}else{
    $head_title = 'SERVICES';
}
?>
<div class="widget widget_services text-white">
    <h3 class="widget-title"><?=$head_title?></h3>
    <ul>
        <?php foreach ($rows as $row): ?>
            <?php print $row ?>
        <?php endforeach; ?>
    </ul>
</div>

