
<?php
?>

<!-- BLOG POST IMAGE -->
<div class="blog-post-img mb-40">
    <?php $path_img = file_create_url($node->field_image['und'][0]['uri'])?>
    <img src="<?=$path_img?>" class="img-fluid" alt="<?=$node->field_image['und'][0]['title']?>" title="<?=$node->field_image['und'][0]['title']?>">
</div>


<!-- BLOG POST TEXT -->
<div class="sblog-post-txt">

    <h4 class="h4-lg steelblue-color"><?= $node->title?></h4>

    <span>Đăng <?= date('d/m/Y',$node->changed)?> bởi <span>Admin</span></span>

    <p class="mt-30"><?=render($content['body'])?>
    </p>
    <div class="post-share-links">
        <div class="post-tags-list">
            <?=render($content['field_chuyen_muc'])?>
        </div>
        <div class="post-tags-list">
            <?=render($content['field_tags'])?>
        </div>
    </div>
</div>
