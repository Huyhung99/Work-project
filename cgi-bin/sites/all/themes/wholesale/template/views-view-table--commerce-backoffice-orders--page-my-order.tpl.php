
<div class="table-responsive">
<table class="table table-bordered table-striped text-nowrap">
    <?php if (!empty($title) || !empty($caption)): ?>
        <caption><?php print $caption . $title; ?></caption>
    <?php endif; ?>
    <?php if (!empty($header)) : ?>
        <thead>
        <tr>
            <?php $i = 0; $width_arr = [0 => '1%', 1 => '1%', 2 => '1%', 3 => '', 4 => '1%', 5 => '1%'] ?>
            <?php foreach ($header as $field => $label): ?>
                <th <?php if ($header_classes[$field]): ?> class="<?php print $header_classes[$field]; ?>"<?php endif; ?> scope="col" width="<?=$width_arr[$i]?>">
                    <?php print $label; ?>
                </th>
            <?php $i++;?>
            <?php endforeach; ?>
        </tr>
        </thead>
    <?php endif; ?>
    <tbody>
    <?php foreach ($rows as $row_count => $row): ?>
        <tr <?php if ($row_classes[$row_count]): ?> class="<?php print implode(' ', $row_classes[$row_count]); ?>"<?php endif; ?>>
            <?php foreach ($row as $field => $content): ?>
                <td <?php if ($field_classes[$field][$row_count]): ?> class="<?php print $field_classes[$field][$row_count]; ?>"<?php endif; ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
                    <?php print $content; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>