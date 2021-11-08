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
$tongtien = 0;
$arr=[];
?>
<?php foreach ($rows as $id => $row): ?>
  <?php
  $arr_row = explode('{{^}}',$row);
//  $arr[]=$arr_row[1];
  $arr_sp = explode('<br />', nl2br(strip_tags($arr_row[0])));
  $soluong += intval(trim($arr_sp[1]));
  $tongtien += intval(preg_replace('/[^0-9]/', '', $arr_sp[2])); // intval(trim(str_replace('.', '', str_replace('₫', '', strip_tags($arr_sp[2]))))) * intval(trim($arr_sp[1])) ;
//  dsm(intval(trim($arr_sp[1])));
//  dsm(intval(trim(strip_tags(
//    str_replace(
//      '₫', '', $arr_sp[2]
//    )
//  ))));
  ?>
<?php endforeach; ?>
<div class="cart-info-group">
  <?php print l('<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
      <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
      <div class="num-items-in-cart">
        <div class="items-cart-left">
          <i class="fa fa-shopping-cart cart_img"></i>
          <span class="cart_text icon"><span class="number">'.$soluong.'</span></span>
        </div>
        <div class="items-cart-right">
          <span class="title_cart"></span>
        </div>
      </div>',
    'cart', array('attributes' => array('class' => array('cart', 'dropdown-toggle', 'dropdown-link')), 'html' => true))
  ?>
  <div class="dropdown-menu cart-info" style="display: none;">
    <div class="cart-content">
      <div class="items control-container">
        <?php foreach ($rows as $id => $row): ?>
          <?php
          $arr_row = explode('{{^}}',$row);
          print trim(str_replace('Giá₫', '',
            str_replace('Giá gốc₫','<span class="original-price mini-cart-price">',
              str_replace('Giá bán₫', ' đ</span>',
                $arr_row[1]))));
          ?>
        <?php endforeach; ?>
      </div>
      <div class="subtotal">
        <span><?php print t('Tổng tiền:') ?></span>
        <span class="cart-total-right money" data-currency-usd="<?=number_format($tongtien,0, '.', ',')?> VNĐ" data-currency="VNĐ">
          <?=number_format($tongtien,0, '.', '.')?> VNĐ</span>
      </div>
      <div class="action">
        <?php print l('Giỏ hàng <i class="fa fa-caret-right"></i>', 'cart', array('attributes' => ['class' => 'btn'], 'html' => TRUE));  ?>
        <?php print l('THANH TOÁN <i class="fa fa-caret-right"></i>', 'checkout', array('attributes' => ['class' => 'btn float-right'], 'html' => TRUE));  ?>
      </div>
    </div>
  </div>
</div>
