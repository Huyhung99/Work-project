<?php
global $language;
if ($language->language == "vi"){
    $title = 'Tin mới nhất';
}else if ($language->language == "en"){
    $title = 'Recent Posts';
}
?>
<div class="sidebar-item recent-post">
    <div class="title">
        <h4><?php print $title?></h4>
    </div>
    <ul>
        <?php foreach ($rows as $row):?>
        <?php print $row?>
        <?php endforeach;?>
    </ul>
</div>
