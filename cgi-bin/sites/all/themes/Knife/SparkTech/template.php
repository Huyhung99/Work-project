<?php
function getMenuSparkTech(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li class='menu-item'>";
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        )
                    )
                );
            } else {
                $str .= '<li class="menu-item-has-children">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true,
                    )

                );
            }

            // nếu có menu con
            if (count($item['below']) > 0) {
                $str .= '<ul class="sub-menu">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0)
                        $str .= "<li>" . l(
                                $subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $item['link']['link_title'],
                                    ),
                                    'html' => true
                                )
                            ) . "</li>";
                }
                $str .= '</ul>';
            }
            $str .= '</li>';
        }
    }
    return '<ul>' . $str . '</ul>';
}
function SparkTech_form_webform_client_form_798_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('d-none');
    $form['submitted']['email']['#prefix'] = t('<div class="box-email">');
    $form['submitted']['email']['#suffix'] = t('<button type="submit" class="submit-email"><i class="fas fa-chevron-right"></i></button></div>');
}
function SparkTech_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id)
{
  if(isset(node_load(arg(1))->nid) || isset(node_load(arg(1))->vid)){
    $form['quantity']['#prefix']='<div class="product-quantity-selector form-control-select">
    <p> Số lượng </p>
                                  <div class="quantity-counter d-flex">
                                    <span class="con_dau dau-tru">-</span>';
    $form['quantity']['#suffix']='
                                    <span class="con_dau dau-cong">+</span>
                                  </div>
                            </div>';
    $form['quantity']['#attributes']['class'] = array('quantity');
    $form['quantity']['#theme_wrappers'] = array();
    $form['quantity']['#title'] = t('Số lượng :');
    $form['submit']['#prefix']='<button class="btn btn-primary d-block form-submit" type="submit"><i class="fa d-inline fa-shopping-cart"></i> Mua ngay
</button>';
    $form['submit']['#attributes']['class'] = array('btn btn-primary','d-none');
  }
  else
  {
    $form['quantity']['#theme_wrappers'] = array();
    $form['submit']['#prefix']='<button class="btn btn-primary d-block form-submit" type="submit"><i class="fa d-inline fa-shopping-cart"></i> Thêm vào giỏ hàng
</button>';
    $form['submit']['#attributes']['class'] = array('btn btn-primary','d-none');
  }
}
function noi_dung($nid)
{
  $str="";
  if(!isset(node_load($nid)->field_noi_dung['und'][0]['value']))
  {
    $str="Đang cập nhật";
  }
  else
  {
    $str = node_load($nid)->field_noi_dung['und'][0]['value'];
  }
  return $str;
}

/**
 * Implements hook_element_info().
 */
function SparkTech_form_commerce_checkout_form_checkout_alter(&$form, &$form_state, $form_id)
{
  global $user;
//  dsm($form);
//    $form['#attributes']['class'] = array('table','table-striped','table-bordered','text-nowrap');
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['name_block']['name_line']['#attributes']['class'] = array('form-control');
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['name_block']['name_line']['#prefix'] = t('<div class="row"><div class="col-md-6">');
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['name_block']['name_line']['#suffix'] = t('</div></div>');
  $form['customer_profile_billing']['commerce_customer_address']['#theme_wrapper']=array();

  $form['account']['login']['mail']['#attributes']['class']=array('form-control');
  $form['account']['login']['mail']['#prefix'] = t('<div class="row"><div class="col-md-6">');
  $form['account']['login']['mail']['#suffix'] = t('</div></div>');

  $form['customer_profile_billing']['#title'] = t('Thông tin thanh toán');

  if(isset($user->uid) && ($user->uid!=0))
  {
    $form['customer_profile_billing']['addressbook']['#attributes']['class']=array('d-none');
    $form['customer_profile_billing']['addressbook']['#description']=t('');
    $form['customer_profile_billing']['addressbook']['#title']=t('');
    $form['customer_profile_billing']['addressbook']['#theme_wrapper']=array();
  }
  //    dsm($form);
  $form['customer_profile_billing']['field_so_dien_thoai']['und'][0]['value']['#attributes']['class'] = array('form-control');
  $form['customer_profile_billing']['field_so_dien_thoai']['und'][0]['value']['#prefix'] = t('<div class="row"><div class="col-md-6">');
  $form['customer_profile_billing']['field_so_dien_thoai']['und'][0]['value']['#suffix'] = t('</div></div>');
  $form['customer_profile_billing']['field_so_dien_thoai']['#theme_wrapper']=array();

  $form['customer_profile_billing']['field_dia_chi']['und'][0]['value']['#attributes']['class'] = array('form-control');
  $form['customer_profile_billing']['field_dia_chi']['und'][0]['value']['#prefix'] = t('<div class="row"><div class="col-md-6">');
  $form['customer_profile_billing']['field_dia_chi']['und'][0]['value']['#suffix'] = t('</div></div>');
  $form['customer_profile_billing']['field_dia_chi']['#theme_wrapper']=array();

  $form['customer_profile_billing']['field_thanh_pho']['und'][0]['value']['#attributes']['class'] = array('form-control');
  $form['customer_profile_billing']['field_thanh_pho']['und'][0]['value']['#prefix'] = t('<div class="row"><div class="col-md-6">');
  $form['customer_profile_billing']['field_thanh_pho']['und'][0]['value']['#suffix'] = t('</div></div>');
  $form['customer_profile_billing']['field_thanh_pho']['#theme_wrapper']=array();

  $form['customer_profile_billing']['field_quan_huyen']['und'][0]['value']['#attributes']['class'] = array('form-control');
  $form['customer_profile_billing']['field_quan_huyen']['und'][0]['value']['#prefix'] = t('<div class="row"><div class="col-md-6">');
  $form['customer_profile_billing']['field_quan_huyen']['und'][0]['value']['#suffix'] = t('</div></div>');
  $form['customer_profile_billing']['field_quan_huyen']['#theme_wrapper']=array();

  $form['customer_profile_billing']['field_phuong_xa']['und'][0]['value']['#attributes']['class'] = array('form-control');
  $form['customer_profile_billing']['field_phuong_xa']['und'][0]['value']['#prefix'] = t('<div class="row"><div class="col-md-6">');
  $form['customer_profile_billing']['field_phuong_xa']['und'][0]['value']['#suffix'] = t('</div></div>');
  $form['customer_profile_billing']['field_phuong_xa']['#theme_wrapper']=array();

  $form['buttons']['continue']['#attributes']['class'] = array('cs-btn-one btn-primary-color mrt-30');
  $form['buttons']['cancel']['#prefix'] = t(' ');
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function SparkTech_form_webform_client_form_40_alter(&$form, &$form_state, $form_id) {
  $form['submitted']['ho_ten']['#theme_wrapper']=array();
  $form['submitted']['dien_thoai']['#theme_wrapper']=array();
  $form['submitted']['email']['#theme_wrapper']=array();
  $form['submitted']['ho_ten']['#theme_wrapper']=array();
  $form['submitted']['ho_ten']['#prefix']=t('<div class="row"><div class="col-md-6">');
  $form['submitted']['ho_ten']['#suffix']=t('</div>');
  $form['submitted']['dien_thoai']['#prefix']=t('<div class="col-md-6">');
  $form['submitted']['dien_thoai']['#suffix']=t('</div></div>');
}
