<?php
/**
 ** hungd
 ** 5/3/2020 7:21 AM
 ** views-view-table--member-list--page.tpl.php
 ** drupal-7.65
 */
?>
<section class="cart-section">
  <!--Cart Outer-->
  <div class="cart-outer">
    <div class="table-outer">
      <table class="cart-table">
        <?php if (!empty($title) || !empty($caption)): ?>
          <caption><?php print $caption . $title; ?></caption>
        <?php endif; ?>
        <?php if (!empty($header)) : ?>
          <thead>
          <tr>
            <?php foreach ($header as $field => $label): ?>
              <th <?php if ($header_classes[$field]): ?> class="<?php print $header_classes[$field]; ?>"<?php endif; ?> scope="col">
                <?php print $label; ?>
              </th>
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
  </div>
</section>

