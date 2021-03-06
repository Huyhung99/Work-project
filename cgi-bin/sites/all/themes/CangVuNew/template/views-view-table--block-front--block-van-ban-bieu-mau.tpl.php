<div class="table-responsive">
  <table <?php if ($classes): ?> class="<?php print $classes; ?>"<?php endif ?><?php print $attributes; ?> border="">
    <?php if (!empty($title) || !empty($caption)): ?>
      <caption><?php print $caption . $title; ?></caption>
    <?php endif; ?>
    <?php if (!empty($header)) : ?>
      <thead>
      <tr>
        <?php $index = 0; ?>
        <?php foreach ($header as $field => $label): ?>
          <?php $width = ($index == 1 ? '' : 'width="1%"') ?>
          <?php $index++; ?>
          <th <?php if ($header_classes[$field]): ?> class="<?php print $header_classes[$field]; ?>"<?php endif; ?> scope="col" <?=$width?>>
            <?php print $label; ?>
          </th>
        <?php endforeach; ?>
      </tr>
      </thead>
    <?php endif; ?>
    <tbody>
    <?php foreach ($rows as $row_count => $row): ?>
      <tr <?php if ($row_classes[$row_count]): ?> class="<?php print implode(' ', $row_classes[$row_count]); ?>"<?php endif; ?>>
        <?php $index = 0; ?>
        <?php foreach ($row as $field => $content): ?>

          <td <?php if ($field_classes[$field][$row_count]): ?> class="<?php print $field_classes[$field][$row_count]; ?>"<?php endif; ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
            <?php if($index == 1) $content = wordwrap($content, 70,'<br />'); ?>
            <?php print $content; ?>
            <?php $index++; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
