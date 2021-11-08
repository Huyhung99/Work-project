<?php

?>

<h1 class="single-post__title"><?=$node->title?></h1>
<div class="single-post__body">
    <? print render($content['body'])?>
    <? print render($content['field_file_dinh_kem'])?>

</div>
<div class="single-post__tag">
    <?= render($content['field_tags'])?>
</div>
