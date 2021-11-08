<?php
/**
 ** hungd
 ** 5/1/2020 4:19 PM
 ** views-view-unformatted--mini-cart--block-mini-cart.tpl.php
 ** drupal-7.65
 */
?>
<?php
/**
 ** hungd
 ** 2/25/2020 7:52 AM
 ** views-view-unformatted--gio-hang--block-mini-cart.tpl.php
 ** kickstart
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 9/8/2018
 * Time: 11:29 AM
 */

$soluong = 0;
?>
<?php foreach ($rows as $id => $row): ?>
  <?php
  $soluong += intval(trim(strip_tags($row)));
  ?>
<?php endforeach; ?>
<?php print l('<i class="icon flaticon-shopping-bag"></i>  <span class="count">'.$soluong.'</span>',
  'cart', array('attributes' => array('class' => array('cart', 'dropdown-toggle', 'dropdown-link')), 'html' => true))
?>

