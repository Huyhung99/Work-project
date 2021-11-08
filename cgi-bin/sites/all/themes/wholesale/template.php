<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 2/23/17
 * Time: 3:37 PM
 */
function getMainMenuWholesale($page = ''){
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
        $str .='<li class="submenu">';
        $str .=l($item['link']['link_title'],
          'javascript:void(0);',
          array(
            'attributes' => array(
              'class' => array('show-submenu'),
              'title' => $item['link']['link_title'],
            ),
            'html' => true,
            'fragment' => '',
            'external' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul>';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  ),
                  'html' => true
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
  }
  return '<ul>'.$str.'</ul>';
}
function wholesale_preprocess_page(&$variables) {
  if (isset($variables['node']->type)) {
    $nodetype = $variables['node']->type;
    $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
  }
}
/**
 * Implements hook_form_FORM_ID_alter().
 */
function wholesale_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id)
{
  $form['quantity']['#title'] = t('');
  $form['submit']['#attributes']['class'] = array('btn_add_to_cart');
  $form['quantity']['#attributes']['class'] = array('form-control');
}

/**
 * Implements hook_form_alter().
 */
function wholesale_form_commerce_checkout_form_checkout_alter(&$form, &$form_state, $form_id)
{
  $form['customer_profile_billing']['field_thanh_pho']['und'][0]['value']['#attributes']['class'] = array('form-control col-md-6');
  $form['customer_profile_billing']['field_quan_huyen']['und'][0]['value']['#attributes']['class'] = array('form-control col-md-6');
  $form['customer_profile_billing']['field_phuong_xa']['und'][0]['value']['#attributes']['class'] = array('form-control col-md-6');
  $form['customer_profile_billing']['field_so_dien_thoai']['und'][0]['value']['#attributes']['class'] = array('form-control col-md-6');
  $form['customer_profile_billing']['field_dia_chi']['und'][0]['value']['#attributes']['class'] = array('form-control col-md-6');
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['name_block']['name_line']['#attributes']['class'] = array('form-control col-md-6');
  $form['customer_profile_billing']['field_phuong_xa']['#attributes']['class'] = array('form-group');
  $form['customer_profile_billing']['field_thanh_pho']['#attributes']['class'] = array('form-group');
  $form['customer_profile_billing']['field_quan_huyen']['#attributes']['class'] = array('form-group');
  $form['customer_profile_billing']['field_so_dien_thoai']['#attributes']['class'] = array('form-group');
  $form['customer_profile_billing']['commerce_customer_address']['#attributes']['class'] = array('form-group');
  $form['customer_profile_billing']['field_dia_chi ']['#attributes']['class'] = array('form-group');

  $form['customer_profile_billing']['#title'] = t('<h3 class="title-checkout">Thông tin thanh toán</h3>');
  $form['buttons']['cancel']['#prefix'] = '';

  //Shipping information
  $form['customer_profile_shipping']['#title'] = t('Thông tin vận chuyển');
  $form['customer_profile_shipping']['commerce_customer_profile_copy']['#title'] = t('<em class="placeholder">Thông tin vận chuyển</em> giống với <em class="placeholder">Thông tin hóa đơn</em>.');
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function wholesale_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
  if ($form['#id']=='views-exposed-form-taxonomy-term-page-search-product'){
    $form['submit']['#attributes']['class'] = array('d-none');
    $form['title']['#attributes']['placeholder'] = t('Tìm kiếm sản phẩm');
  }

}


?>


