<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 2/23/17
 * Time: 3:37 PM
 */
function getMainMenuRozaluta($page = ''){
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

/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_commerce_cart_add_to_cart_form_3_4_5_alter(&$form, &$form_state, $form_id) {
  $form['quantity']['#attributes']['class'] = ['form-control'];
  $form['attributes']['field_trong_luong']['#attributes']['class'] = ['form-control'];
  $form['submit']['#attributes']['class'] = ['ghost-on-hover-btn'];
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
//views-exposed-form-commerce-backoffice-orders-page-my-order
/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_views_exposed_form_commerce_backoffice_orders_page_my_order_alter(&$form, &$form_state, $form_id) {
}
//page.tpl.php
//page--front.tpl.php
//page--
?>
