<?php
/**
 ** hungd
 ** 2/25/2020 2:22 PM
 ** views-view-table--commerce-cart-form--default.tpl.php
 ** kickstart
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
<?php $tong=0;
$tinh=0;?>
<div class="table-responsive">
    <table class="cart-items">
      <?php $tong=0;?>
      <?php $a=[0=>"1%",1=>'',2=>"12%",3=>"10%",4=>"12%",5=>"1%",6=>"1%",7=>"1%",8=>"1%"]?>
      <?php $i=0;?>
        <?php if (!empty($title) || !empty($caption)): ?>
            <caption><?php print $caption . $title; ?></caption>
        <?php endif; ?>
        <?php if (!empty($header)) : ?>
            <thead>
            <tr>
                <?php foreach ($header as $field => $label): ?>
                    <th <?php if ($header_classes[$field]): ?> class="<?php print $header_classes[$field]; ?> "<?php endif; ?>
                            scope="col" width="<?=$a[$i]?>">
                        <?php print $label; ?>
                    </th>
                <?php $i++;?>
                <?php endforeach; ?>
            </tr>
            </thead>
        <?php endif; ?>

        <tbody>
        <?php foreach ($rows as $row_count => $row): ?>
        <?php $b=0;?>
            <tr <?php if ($row_classes[$row_count]): ?> class="<?php print implode(' ', $row_classes[$row_count]); ?>"<?php endif; ?>>
                <?php foreach ($row as $field => $content): ?>
                <?php $b++;?>
                    <td <?php if ($field_classes[$field][$row_count]): ?> class="<?php print $field_classes[$field][$row_count]; ?>"<?php endif; ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
                        <?php print str_replace('Giá₫', '',
                          str_replace('Giá gốc₫','<span class="original-price">',
                            str_replace('Giá bán₫', ' đ</span>',
                              $content))); ?>
                      <?php if($b==5){$tinh=intval(trim(str_replace('đ','',str_replace('Giá₫', '',
                          str_replace('Giá gốc₫','',
                            str_replace('Giá bán₫', '',
                              $content))))));
                          $tong=$tong+$tinh;
                      }?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="commerce-order-handler-area-order-total"><div class="field field-name-commerce-order-total field-type-commerce-price field-label-inline inline"><div class="field-label">Tổng tiền:&nbsp;</div><div class="field-items"><div class="field-item even"><?=number_format($tong,'0',',','.')?> đ</div></div></div></div>
