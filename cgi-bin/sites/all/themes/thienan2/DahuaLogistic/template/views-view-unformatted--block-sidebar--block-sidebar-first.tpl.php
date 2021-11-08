<div class="widget widget_gallery mfp-gallery clearfix">
    <h4><?=t('GALLERY')?></h4>
    <ul>
        <?php foreach ($rows as $id => $row): ?>
            <li>
                <?php print $row; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="mt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>