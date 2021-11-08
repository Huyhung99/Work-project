<?php
function getMenuPhucLongJewelry(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item){
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .="<li class='nav-item'>";
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
                $str .='<li class="nav-item dropdown">';
                $str .=l('<span>'.$item['link']['link_title'].'</span>'.' <i class="fa fa-caret-down"></i>
                                            <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                                            <i class="sub-dropdown visible-sm visible-md visible-lg"></i>',
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('dropdown-toggle dropdown-link'),
                            'data-toggle' => 'dropdown'
                        ),
                        'fragment' => '',
                        'html' => true
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0 && count($item['below']) < 8){
                $str .='<ul class="dropdown-menu">';
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
            if(count($item['below']) >= 8){
                $str .='<ul class="dropdown-menu grid-menu">';
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
    return "<ul class='nav navbar-nav hoverMenuWrapper'>{$str}</ul>";
}
function phuclongJewelry_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}

/**
 * Implements hook_form_alter().
 */
function phuclongJewelry_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id)
{
    $form['line_item_fields']['field_mau_sac_add_to_cart']['und']['#attributes']['class'] = array('form-control');
    $form['line_item_fields']['field_kich_thuoc_add_to_cart']['und']['#attributes']['class'] = array('form-control');
    $form['quantity']['#attributes']['class'] = array('item-quantity quantity-input-product form-control');
    $form['quantity']['#title'] = t('Số lượng');
    $form['quantity']['#prefix'] = t('<div class="quantity-product">');
    $form['quantity']['#field_prefix'] = t('<span class="qty-down ">
                                            <i class="fa fa-caret-left"></i>
											</span>');
    $form['quantity']['#field_suffix'] = t('<span class="qty-up ">
																		<i class="fa fa-caret-right"></i>
																		</span>');
    $form['quantity']['#suffix'] = t('</div>');
    $form['submit']['#attributes']['class'] = array('form-control btn btn-1 add-to-cart');

}
function phuclongJewelry_form_commerce_checkout_form_checkout_alter(&$form, &$form_state, $form_id)
{
    $form['cart_contents']['cart_contents_view']['#markup']=str_replace('Order total','Tổng tiền',$form['cart_contents']['cart_contents_view']['#markup']);
    $form['customer_profile_billing']['#title'] = t('Thông tin hóa đơn');
    $form['customer_profile_billing']['addressbook']['#attributes']['class'] = array('d-none');
    $form['customer_profile_billing']['addressbook']['#title'] = t('');
    $form['customer_profile_billing']['addressbook']['#description'] = t('');

    $form['customer_profile_billing']['commerce_customer_address']['und'][0]['name_block']['name_line']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_dia_chi']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_so_dien_thoai']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_thanh_pho']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_quan_huyen']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_phuong_xa']['und'][0]['value']['#attributes']['class'] = array('form-control');

    $form['customer_profile_shipping']['field_dia_chi']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_shipping']['field_thanh_pho']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_shipping']['field_quan_huyen']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_shipping']['field_phuong_xa']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_shipping']['commerce_customer_address']['und'][0]['name_block']['name_line']['#attributes']['class'] = array('form-control');
    $form['customer_profile_shipping']['commerce_customer_profile_copy']['#title'] = t('<em class="placeholder">Thông tin vận chuyển</em> giống với <em>Thông tin hóa đơn</em> (Bỏ tích nếu nơi nhận khác với thông tin hóa đơn)');
    $form['buttons']['cancel']['#prefix'] = t('');
}
/**
 * Implements hook_form_alter().
 */
function phuclongJewelry_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
    if($form['#id'] == 'views-exposed-form-taxonomy-term-page-search-product-front'){
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['#info']['filter-title']['#attributes']['class'] = array('d-none');
        $form['title']['#attributes']['class'] = array('form-control');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm...');
        $form['#attributes']['class'] = array('search-form dropdown-menu');
    }
    if($form['#id'] == 'views-exposed-form-taxonomy-term-page-product-search-mobile'){
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['#info']['filter-title']['#attributes']['class'] = array('d-none');
        $form['title']['#theme_wrappers'] = array();
        $form['title']['#suffix'] = t('<button type="submit" class="search-submit" title="search"><i class="fa fa-search"></i></button>');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm...');
        $form['#attributes']['class'] = array('search-form');
        $form['submit']['#theme_wrappers'] = array();
    }

}

/**
 * Implements hook_form_alter().
 */
function phuclongJewelry_form_commerce_checkout_form_shipping_alter(&$form, &$form_state, $form_id)
{
    $form['commerce_shipping']['#title'] = t('Dịch vụ vận chuyển');
    $form['buttons']['back']['#prefix'] = t('');
}

/**
 * Implements hook_form_alter().
 */
function phuclongJewelry_form_views_form_commerce_cart_form_default_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn');
    $form['actions']['checkout']['#attributes']['class'] = array('btn');
}

/**
 * Implements hook_form_alter().
 */
function phuclongJewelry_form_commerce_checkout_form_review_alter(&$form, &$form_state, $form_id)
{
    $form['buttons']['back']['#prefix'] = t('');
    $form['buttons']['back']['#attributes']['class'] = array('mt-30');
}
/**
 * Implements hook_form_FORM_ID_alter().
 */
?>
