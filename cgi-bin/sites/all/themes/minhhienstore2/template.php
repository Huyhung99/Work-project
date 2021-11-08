<?php
function getMainMenuMinhHienStore(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .="<li>";
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'html' => true
          )
        );
      }else
      {
        $str .='<li>';
        $str .=l($item['link']['link_title'].' <i class="fa fa-angle-down"></i>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
            ),
            'fragment' => '',
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="sub-menu">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  )
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
  }
  return "<ul>{$str}</ul>";
}
function getMainMenuMobileMinhHienStore(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .="<li>";
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'html' => true
          )
        );
      }else
      {
        $str .='<li>';
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
                'class' => array('menu-item-has-children')
            ),
            'fragment' => '',
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="dropdown">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  )
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
  }
  return "<ul class='mobile-menu'>{$str}</ul>";
}

function getDanhMucSanPhamMenu(){
  $mainMenu = menu_tree_all_data('menu-danh-muc-san-pham');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .="<li>";
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'html' => true
          )
        );
      }else
      {
        $str .='<li class="menu_item_children">';
        $str .=l($item['link']['link_title'].' <i class="fa fa-angle-right"></i>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
            ),
            'fragment' => '',
            'external' => true,
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="categories_mega_menu">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  )
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
  }
  return "<ul>{$str}</ul>";
}



/**
 * Implements hook_form_FORM_ID_alter().
 */
function minhhienstore2_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id)
{
    $form['submit']['#attributes']['class'] = array('add-to-cart-product form-control');
    $form['quantity']['#attributes']['class'] = array('form-control');
    $form['quantity']['#title'] = t('Số lượng');

}

/**
 * Implements hook_form_alter().
 */
function minhhienstore2_form_views_form_commerce_cart_form_default_alter(&$form, &$form_state, $form_id)
{

    $form['edit_quantity'][0]['#attributes']['title'] = t('Số lượng');
    $form['actions']['submit']['#prefix'] = t('<div class="cart-page-total">');
    $form['actions']['submit']['#attributes']['class'] = ['proceed-checkout-btn mr-20'];
    $form['actions']['checkout']['#attributes']['class'] = ['proceed-checkout-btn'];
    $form['actions']['checkout']['#suffix']= t('</div>');
}


function minhhienstore2_form_commerce_checkout_form_checkout_alter(&$form, &$form_state, $form_id)
{
    $form['customer_profile_billing']['#title'] = t('Thông tin hóa đơn');
    $form['customer_profile_billing']['commerce_customer_address']['und'][0]['name_block']['name_line']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_dia_chi']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_so_dien_thoai']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_thanh_pho']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_quan_huyen']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_phuong_xa']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['buttons']['cancel']['#prefix'] = t('');
}

/**
 * Implements hook_form_alter().
 */
function minhhienstore2_form_commerce_checkout_form_review_alter(&$form, &$form_state, $form_id)
{
    $form['buttons']['back']['#prefix'] = t('');
}

/**
 * Implements hook_form_alter().
 */
function minhhienstore2_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
    if($form['#id'] == 'views-exposed-form-taxonomy-term-page-search-product'){
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['title']['#attributes']['class'] = array('form-control');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm...');
    }
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-product-search-front')
    {
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm...');
        $form['title']['#attributes']['class'] = array('search-field');
        $form['title']['#prefix'] = t('<div class="search-field-wrap">');
        $form['title']['#suffix'] = t('<div class="search-btn">
    <button type="submit"><i class="icon-search"></i></button>
</div></div>');
        $form['field_product_category_tid']['#attributes']['class'] = array('nice-select');
        $form['field_product_category_tid']['#prefix'] = t('<div class="search-select-box">');
        $form['field_product_category_tid']['#suffix'] = t('</div>');
    }
}
/**
 * Implements hook_form_alter().
 */
function minhhienstore2_form_webform_client_form_655_alter(&$form, &$form_state, $form_id)
{
    $form['#attributes']['class'] = array('contact-us-box');
    $form['submitted']['ho_ten']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['ho_ten']['#suffix'] = t('</div>');
    $form['submitted']['so_dien_thoai']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['so_dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['email']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['email']['#suffix'] = t('</div>');
    $form['submitted']['ghi_chu']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['ghi_chu']['#suffix'] = t('</div>');
    $form['submitted']['danh_sach_khoa_hoc']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['danh_sach_khoa_hoc']['#suffix'] = t('</div>');
    $form['actions']['submit']['#attributes']['class'] = array('submit-button submit-btn');
    $form['actions']['submit']['#prefix'] = t('<div class="single-input">');
    $form['actions']['submit']['#suffix'] = t('</div>');
}
function minhhienstore2_form_webform_client_form_40_alter(&$form, &$form_state, $form_id)
{
    $form['#attributes']['class'] = array('contact-us-box');
    $form['submitted']['ho_ten']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['ho_ten']['#suffix'] = t('</div>');
    $form['submitted']['dien_thoai']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['email']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['email']['#suffix'] = t('</div>');
    $form['submitted']['noi_dung']['#prefix'] = t('<div class="single-input">');
    $form['submitted']['noi_dung']['#suffix'] = t('</div>');
    $form['actions']['submit']['#attributes']['class'] = array('submit-button submit-btn');
    $form['actions']['submit']['#prefix'] = t('<div class="single-input">');
    $form['actions']['submit']['#suffix'] = t('</div>');
}
// remove html class from form item
function minhhienstore2_form_alter(&$form, &$form_state, $form_id) {
    switch ($form_id) {
        case 'webform_client_form_655':
            $classes = &$form['actions']['submit']['#attributes']['class'];
            $classes = array_filter($classes , function($e){
                return $e != 'form-submit';
            });
            break;
    }
}