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
<div class="table-content table-responsive">
<table class="table ">
    <?php if (!empty($title) || !empty($caption)): ?>
        <caption><?php print $caption . $title; ?></caption>
    <?php endif; ?>
    <?php if (!empty($header)) : ?>
        <thead>
        <tr>
            <?php foreach ($header as $field => $label): ?>
                <th  scope="col">
                    <?php print $label; ?>
                </th>
            <?php endforeach; ?>
        </tr>
        </thead>
    <?php endif; ?>
    <tbody>
    <?php foreach ($rows as $row_count => $row): ?>
        <tr >
            <td class="product-thumbnail"><?=$row['field_image']?></td>
            <td class="product-name"><?=$row['line_item_title']?></td>
            <td class="product-price"><span class="amount"><?=$row['commerce_unit_price']?></span></td>
            <td class="product-quantity"><?=$row['edit_quantity']?></td>
            <td class="product-subtotal"><?=$row['commerce_total']?></td>
            <td class="product-remove"><?=$row['edit_delete']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
