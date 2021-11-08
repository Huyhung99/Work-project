<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 2/23/17
 * Time: 3:37 PM
 */
function getMainMenuComNguyenNinh($page = ''){
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
        $str .='<li class="dropdown">';
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array(
                'dropdown-toggle',
              ),
              'data-toggle' => 'dropdown'
            ),
            'html' => true,
            'fragment' => '',
            'external' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="dropdown-menu">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $subItem['link']['link_title']
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
  return '<ul class="nav navbar-nav navbar-left" data-in="fadeIn">'.$str.'</ul>';
}

/**
 * Implements hook_process().
 */
function comnguyenninh_preprocess_page(&$variables) {
  if (isset($variables['node']->type)) {
    $nodetype = $variables['node']->type;
    $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
  }
}
function comnguyenninh_commerce_currency_info_alter(&$currencies, $langcode) {
  $currencies['VND']['symbol'] = t('đ');
  $currencies['VND']['symbol_placement'] = t('after');
}

/**
 * Implements hook_form_FORM_ID_alter().
 */


/**
 * Implements hook_form_FORM_ID_alter().
 */
function comnguyenninh_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id)
{
  $form['quantity']['#attributes']['class'] = ['form-control','text-left'];
  $form['attributes']['field_trong_luong']['#attributes']['class'] = ['form-control'];
}

/**
 * Implements hook_form_BASE_FORM_ID_alter().
 */
function comnguyenninh_form_views_form_commerce_cart_form_default_alter(&$form, &$form_state, $form_id)
{
  $form['actions']['submit']['#attributes']['class'] = ['btn btn-default ulockd-btn-gray','ulockd-mrgn1230'];
  $form['actions']['checkout']['#attributes']['class'] = ['btn btn-default ulockd-btn-gray','ulockd-mrgn1230'];
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function comnguyenninh_form_user_login_alter(&$form, &$form_state, $form_id)
{
  $form['actions']['submit']['#attributes']['class'] = ['btn btn-default ulockd-btn-gray'];
  $form['actions']['#suffix'] = '</div><div class="create-account clearfix">
<h4 class="color-gray ">Bạn mới đến với Bánh cốm Nguyên Ninh?</h4>
<a href="/user/register" class="login-register" title="Create a new account">Tạo tài khoản</a></div>';
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function comnguyenninh_form_commerce_checkout_form_checkout_alter(&$form, &$form_state, $form_id)
{
  $form['buttons']['cancel']['#prefix'] = '<span class="button-operator"> hoặc </span>';
  $form['buttons']['cancel']['#attributes']['class'] = ['ulockd-bp-btn'];
  $form['buttons']['#attributes']['class'] = ['ulockd-mrgn1225'];
}
?>
