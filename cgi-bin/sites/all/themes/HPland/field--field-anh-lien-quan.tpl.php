<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 7/23/18
 * Time: 16:20
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php if (!$label_hidden): ?>
        <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
    <?php endif; ?>
    <div class="row">
        <?php foreach ($items as $delta => $item): ?>
        <div class="col-xs-6 col-md-4 block-hinh-anh-lien-quan mb20 mt-30">
            <?php print render($item); ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>

