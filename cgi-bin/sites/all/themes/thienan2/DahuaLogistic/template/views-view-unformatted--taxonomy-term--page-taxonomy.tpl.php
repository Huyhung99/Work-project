<!--[title]{{}}[body]{{}}[path]{{}}[field_image]-->
    <?php foreach ($rows as $id => $row): ?>
                <?php $arr = explode('{{}}', $row);
                $title = trim($arr[0]);
                $body = trim($arr[1]);
                $path = trim($arr[2]);
                $field_image = trim($arr[3]);
                ?>
        <div class="blog-post blog-md date-style-2 clearfix bdr-1 bg-gray-light">

        <div class="mt-post-media">
            <a href="<?=$path?>"><?=$field_image?></a>
        </div>
        <div class="mt-post-info p-m30 p-a30 overflow-hide">
            <div class="mt-post-title">
                <h3 class="post-title sub-page"><a href="<?=$path?>"><?=$title?></a></h3>
            </div>
            <div class="mt-post-text">
                <p><?=$body?></p>
            </div>
            <div class="mt-post-readmore m-b0">
                <a href="<?=$path?>" title="<?=t('READ MORE')?>" rel="bookmark" class="site-button-link"><?= t('READ MORE')?></a>
            </div>
        </div>

    </div>

        <?php endforeach; ?>


