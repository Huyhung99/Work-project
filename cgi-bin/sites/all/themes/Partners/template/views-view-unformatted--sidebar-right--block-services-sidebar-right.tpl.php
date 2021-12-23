<?php
    global $language;
    if ($language->language == "vi"){
        $title = 'Dịch vụ';
    }else if ($language->language == "en"){
        $title = 'Services';
    }
?>
<div class="sidebar-item category mb-50">
    <div class="title">
        <h4><?=$title?></h4>
    </div>
    <div class="sidebar-info">
        <ul>
            <?php foreach ($rows as $row):?>
            <li>
                <?php print $row?>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>