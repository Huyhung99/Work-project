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

                'fragment' => '',

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
                            'title' => $item['link']['link_title'],
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
function rozaluta_preprocess_page(&$variables) {
  if (isset($variables['node']->type)) {
    $nodetype = $variables['node']->type;
    $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
  }
}
function rozaluta_commerce_currency_info_alter(&$currencies, $langcode) {
  $currencies['VND']['symbol'] = t('đ');
  $currencies['VND']['symbol_placement'] = t('after');
}

function rozaluta_commerce_price_formatted_components_alter(&$components, $price, $entity) {
  $components['commerce_price_formatted_amount']['title'] = t('Tổng tiền');
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_commerce_cart_add_to_cart_form_10_16_17_alter(&$form, &$form_state, $form_id) {
  $form['quantity']['#attributes']['class'] = ['form-control','text-left'];
  $form['attributes']['field_trong_luong']['#attributes']['class'] = ['form-control'];
  $form['submit']['#attributes']['class'] = ['ghost-on-hover-btn'];
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_commerce_cart_add_to_cart_form_14_15_alter(&$form, &$form_state, $form_id)
{
  $form['attributes']['field_trong_luong']['#attributes']['class'] = ['form-control'];
  $form['submit']['#attributes']['class'] = ['ghost-on-hover-btn'];
  $form['quantity']['#attributes']['class'] = ['form-control','text-left'];

}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_commerce_cart_add_to_cart_form_12_18_alter(&$form, &$form_state, $form_id)
{
  $form['quantity']['#attributes']['class'] = ['form-control','text-left'];

  $form['submit']['#attributes']['class'] = ['ghost-on-hover-btn'];
  $form['attributes']['field_trong_luong']['#attributes']['class'] = ['form-control'];
}

/**
 * Implements hook_page_alter().
 */
function rozaluta_page_alter(&$page)
{
  $page['content']['system_main']['actions']['submit']['#attributes']['class'] = ['ghost-on-hover-btn'];
  $page['content']['system_main']['actions']['preview']['#attributes']['class'] = ['hidden'];
  //hình ảnh
  $page['content']['system_main']['field_image']['und'][0]['#description'] = '';
  $page['content']['system_main']['field_image']['und'][0]['#title'] = t('Hình ảnh');
  $page['content']['system_main']['field_image']['und'][0]['#value'] = t('Hình ảnh');
  $page['content']['system_main']['field_image']['und'][0]['upload_button']['#attributes']['class'] = ['hidden'];

  $page['content']['system_main']['body']['und'][0]['#description'] = '';
  $page['content']['system_main']['body']['und'][0]['format']['help'] = '';
  $page['content']['system_main']['body']['und'][0]['format']['#attributes']['class'] = ['hidden'];
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_user_register_form_alter(&$form, &$form_state, $form_id)
{
  $form['field_gioi_tinh']['#attributes']['class'] = ['d-inline'];
  $form['field_ngay_sinh']['#attributes']['class'] = ['d-inline'];
  $form['account']['name']['#attributes']['class'] = ['d-inline'];
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_commerce_checkout_form_checkout_alter(&$form, &$form_state, $form_id)
{
 $form['customer_profile_billing']['#attributes']['class'] = ['mb-30'];
 $form['buttons']['#attributes']['class'] = ['mb-30'];
 $form['buttons']['continue']['#attributes']['class'] = ['btn-continue'];
 $form['buttons']['cancel']['#attributes']['class'] = ['btn-continue'];
 $form['buttons']['cancel']['#prefix'] = '';
 $form['customer_profile_billing']['addressbook']['#description'] = '';

 $form['customer_profile_billing']['commerce_customer_address']['und'][0]['country']['#attributes']['class'] = array('hide');
 $form['customer_profile_billing']['commerce_customer_address']['und'][0]['country']['#title'] = '';
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['country']['#required'] = false;
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['administrative_area']['#title'] = '';
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['administrative_area']['#attributes']['class'] = array('hide');
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['postal_code']['#title'] = '';
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['postal_code']['#attributes']['class'] = array('hide');

  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['street_block']['premise']['#attributes']['class'] = array('hide');
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['street_block']['premise']['#title']= '';
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['street_block']['thoroughfare']['#title'] = t('Địa chỉ');
  $form['buttons']['cancel']['#attributes']['class'] = array('ml-20');

//
  $form['customer_profile_billing']['field_quan_huyen_order']['#prefix'] = '<div id="block-quan-huyen-checkout">';
  $form['customer_profile_billing']['field_quan_huyen_order']['#suffix'] = '</div>';
//
  $form['customer_profile_billing']['field_phuong_xa_order']['#prefix'] = '<div id="block-phuong-xa-checkout">';
  $form['customer_profile_billing']['field_phuong_xa_order']['#suffix'] = '</div>';
//
  $form['customer_profile_billing']['field_thanh_pho']['und']['#ajax'] = array(
    'callback'  => 'change_thanh_pho',
    'wrapper'   => 'block-quan-huyen-checkout',
    'event' => 'change',
);
  $form['customer_profile_billing']['field_quan_huyen_order']['und']['#ajax'] = array(
    'callback'  => 'change_quan_huyen',
    'wrapper'   => 'block-phuong-xa-checkout',
    'event' => 'change',
);
}

/**
 * Implements hook_form_alter().
 */
function rozaluta_form_commerce_checkout_form_shipping_alter(&$form, &$form_state, $form_id)
{
  $form['buttons']['back']['#prefix'] = '';
  $form['buttons']['#attributes']['class'] = array('mt-20');
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_commerce_checkout_form_review_alter(&$form, &$form_state, $form_id)
{
  $form['help']['#markup'] = t('<div class="checkout-help">
  <h2>Duyệt lại đơn hàng trước khi tiếp tục.</h2>
  </div>');
  $form['checkout_review']['review']['#data']['customer_profile_billing']['#attributes']['class'] = array('p-l20');
  $form['buttons']['back']['#prefix'] = '';
  $form['buttons']['back']['#attributes']['class'] = array('m-l20 checkout-back form-submit');
}

/**
 * Implements hook_form_alter().
 */
/**
 * Implements hook_form_FORM_ID_alter().
 */
function rozaluta_form_views_form_commerce_cart_form_default_alter(&$form, &$form_state, $form_id)
{
}
/**
 * function to return ajax data
 */
function change_thanh_pho($form, &$form_state){
//    $form_state['rebuild'] = TRUE;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://minhhien.com.vn/khu-vuc-api/api/get-data",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array('type' => 'quan_huyen','parent_id' => $_POST['customer_profile_billing']['field_thanh_pho']['und']),
        CURLOPT_HTTPHEADER => array(
            "Cookie: __cfduid=dbb8732cb18b0967bba3c0b8c5033c3821600424050"
        ),
    ));

    $response = json_decode(curl_exec($curl));
    $options = ['' => '-- Chọn --'];
    foreach ($response as $respon) {
        $options[trim($respon->name)] = trim($respon->name);
    }
    $form['customer_profile_billing']['field_quan_huyen_order']['und']['#options'] = $options;
    return $form['customer_profile_billing']['field_quan_huyen_order'];
}

function change_quan_huyen($form, &$form_state){
//    $form_state['rebuild'] = TRUE;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://minhhien.com.vn/khu-vuc-api/api/get-data",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array('type' => 'phuong_xa','parent_id' => $_POST['customer_profile_billing']['field_quan_huyen_order']['und']),
        CURLOPT_HTTPHEADER => array(
            "Cookie: __cfduid=dbb8732cb18b0967bba3c0b8c5033c3821600424050"
        ),
    ));

    $response = json_decode(curl_exec($curl));
    $options = ['' => '-- Chọn --'];
    foreach ($response as $respon) {
        $options[trim($respon->name)] = trim($respon->name);
    }
    $form['customer_profile_billing']['field_phuong_xa_order']['und']['#options'] = $options;
    return $form['customer_profile_billing']['field_phuong_xa_order'];
}

?>

