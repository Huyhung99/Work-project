<?php
/**
 ** hungd
 ** 5/1/2020 5:17 PM
 ** views-view-table--commerce-cart-form--default.tpl.php
 ** drupal-7.65
 */
?>
<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 *
 * @ingroup views_templates
 */
?>
<!--Cart Section-->
<section class="cart-section">
  <!--Cart Outer-->
  <div class="cart-outer">
    <div class="table-outer">
      <table class="cart-table">
        <?php if (!empty($header)) : ?>
          <thead class="cart-header">
          <tr>
            <?php $indexTH = 0;?>
            <?php foreach ($header as $field => $label): ?>
              <th <?php if ($header_classes[$field]): ?> class="<?php print $header_classes[$field]; ?>"<?php endif; ?> scope="col" width="<?=$indexTH > 0 ? '1%' : ''; $indexTH++?>">
                <?php print $label; ?>
              </th>
            <?php endforeach; ?>
          </tr>
          </thead>
        <?php endif; ?>
        <tbody>
        <?php foreach ($rows as $row_count => $row): ?>
          <tr <?php if ($row_classes[$row_count]): ?> class="<?php print implode(' ', $row_classes[$row_count]); ?>"<?php endif; ?>>
            <?php $index = 0;?>
            <?php foreach ($row as $field => $content): ?>
              <?php if($index == 0){
                $productArray = explode('{{}}', strip_tags($content));
                $sku = trim($productArray[0]);
                $query = "SELECT t2.* FROM wtt_field_data_commerce_product t
INNER JOIN wtt_node t2 ON t2.nid = t.entity_id
INNER JOIN wtt_commerce_product t3 ON  t3.product_id = t.commerce_product_product_id
WHERE t3.sku = {$sku}";
                $data = db_query($query);
                $rows = $data->fetchAll();
                if(count($rows) > 0){
                  $content = str_replace("{$sku}{{}}", $rows[0]->title.'<br/>', $content);
                }
              }
              $index++;
              ?>
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
<!--End Cart Section-->
