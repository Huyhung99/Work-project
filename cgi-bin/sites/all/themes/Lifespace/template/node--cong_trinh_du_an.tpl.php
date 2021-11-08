


<div class="row">
    <div class="col-md-12">
        <div class="item">
            <div class="post-img">
                <div class="img"> <?= render($content['field_image'])?></div>
            </div>
            <div class="cont">
                <?php print render($content['body'])?>
                <div class="row mt-30 mb-30">
                    <?php if (!empty($node->field_anh_lien_quan['und'])):?>
                    <?php foreach ($node->field_anh_lien_quan['und'] as $item):
                        $item['path'] = file_create_url($item['uri']);
                        $item['attributes']
                        ?>
                        <div class="col-md-6">
                            <div class="post-img">
                                <div class="img"><?= theme_image($item)?></div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>