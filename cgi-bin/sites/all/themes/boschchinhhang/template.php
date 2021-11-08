<?php
function getMainMenubosch(){
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
        $str .='<li  class="has-submenu full-width">';
        $str .=l($item['link']['link_title'],
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
        if($item['link']['link_title']=="Sản phẩm")
        {
          $str .='<ul class="submenu-nav submenu-nav-mega">';
          foreach($item['below'] as $subItem){
            if($subItem['link']['hidden'] == 0){
              if (count($subItem['below'])==0){
                $str .='<li class="mega-menu-item">'.l($subItem['link']['link_title'],
                    $subItem['link']['link_path'],
                    array(
                      'attributes' => array(
                        'title' => $item['link']['link_title'],
                      )
                    )
                  );
              }
              else{
                $str .='<li class="mega-menu-item">'.l($subItem['link']['link_title'],
                    $subItem['link']['link_path'],
                    array(
                      'attributes' => array(
                        'title' => $item['link']['link_title']
                      ),
                      'html' => true
                    )
                  );
              }
              if (count($subItem['below']) > 0){
                $str .='<ul>';
                foreach ($subItem['below'] as $childItem){
                  $str .="<li>".l($childItem['link']['link_title'],
                      $childItem['link']['link_path'],
                      array(
                        'attributes' => array(
                          'title' => $childItem['link']['link_title'],
                        )
                      )
                    )."</li>";
                }
                $str .="</li>";
                $str .= '</ul>';
              }
            }

          }
          $str .='</ul>';
        }
        else
        {
          $str .='<ul class="submenu-nav submenu-nav-mega">';
          $id_need=0;
          foreach($item['below'] as $subItem){
            if($subItem['link']['hidden'] == 0){
              $id_need++;
              if (count($subItem['below'])==0){
                $str .='<li class="mega-menu-item">'.l($subItem['link']['link_title'],
                    $subItem['link']['link_path'],
                    array(
                      'attributes' => array(
                        'title' => $item['link']['link_title'],
                        'class' => 'srmenu-title',
                      )
                    )
                  );
              }else{
                $str .='<li class="mega-menu-item">'.l($subItem['link']['link_title'],
                    $subItem['link']['link_path'],
                    array(
                      'attributes' => array(
                        'title' => $item['link']['link_title'],
                        'class' => 'srmenu-title',
                      ),
                      'html' => true
                    )
                  );
              }
              if (count($subItem['below']) > 0){
                $str .='<ul>';
                foreach ($subItem['below'] as $childItem){
                  $str .="<li>".l($childItem['link']['link_title'],
                      $childItem['link']['link_path'],
                      array(
                        'attributes' => array(
                          'title' => $childItem['link']['link_title'],
                        )
                      )
                    )."</li>";
                }
                $str .="</li>";
                $str .= '</ul>';
              }
              $str=$str.'</li>';
              if($id_need%4==0)
              {
                $str=$str.'<hr>';
              }
            }

          }
          $str .='</ul>';
        }
      }
      $str .='</li>';
    }
  }
  return '<ul class="main-menu nav justify-content-center">'.$str.'</ul>';
}
function getMainMenuMobilegetMainMenubosch(){
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
        $str .='<li class="menu-item-has-children">';
        $str .=l($item['link']['link_title'],
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
        $str .='<ul class="dropdown">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0){
              if (count($subItem['below']) ==0){
                  $str .="<li>".l($subItem['link']['link_title'],
                          $subItem['link']['link_path'],
                          array(
                              'attributes' => array(
                                  'title' => $item['link']['link_title']
                              )
                          )
                      )."</li>";
              }else{
                  $str .="<li class='menu-item-has-children'>".l($subItem['link']['link_title'],
                          $subItem['link']['link_path'],
                          array(
                              'attributes' => array(
                                  'title' => $item['link']['link_title']
                              )
                          )
                      );

              }
              if (count($subItem['below']) > 0 ){
                  $str .='<ul class="dropdown">';
                  foreach ($subItem['below'] as $childItem){
                      $str .="<li>".l($childItem['link']['link_title'],
                              $childItem['link']['link_path'],
                              array(
                                  'attributes' => array(
                                      'title' => $childItem['link']['link_title']
                                  )
                              )
                          )."</li>";
                  }
                  $str .='</ul>';
              }
              $str .= "</li>";
          }
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
  }
  return "<ul class='mobile-menu'>{$str}</ul>";
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function boschchinhhang_form_webform_client_form_827_alter(&$form, &$form_state, $form_id) {
//  dsm($form);
  $form['#attributes']['class']=array('input-btn-group');
  $form['actions']['submit']['#attributes']['class']=array('btn','btn-theme','btn-black');
}

function muc_menu_footer() {
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      $str .="<li>";
      $str .=l('<i class="fa fa-caret-right" aria-hidden="true"></i> '.$item['link']['link_title'],
        $item['link']['link_path'],
        array(
          'attributes' => array(
            'title' => $item['link']['link_title']
          ),
          'html' => true
        )
      );
    }
  }
  return '<ul class="nav-menu nav">'.$str.'</ul>';
}

function getProductCategories()
{
  $str='<div class="widget-search-box"><form action="/tim-kiem" method="get">
                      <div class="form-input-item">
                        <label for="search2" class="sr-only">Tìm kiếm</label>
                        <input type="text" id="search2" name="title" placeholder="Tìm kiếm">
                        <button type="submit" class="btn-src"><i class="ion-ios-search-strong"></i></button>
                      </div>
                    </form></div>';
  return $str;
}
function getProductCategories_danhmuc(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  $i = 1;
  foreach ($mainMenu as $item){
    if ($item['link']['link_title'] == 'SẢN PHẨM'){
      foreach ($item['below'] as $subItem){
        if($subItem['link']['hidden'] == 0){
          // Nếu không có menu con
          if (count($subItem['below']) == 0)
          {
            $str .="<li>";
            $str .=l($subItem['link']['link_title'],
              $subItem['link']['link_path'],
              array(
                'attributes' => array(
                  'title' => $subItem['link']['link_title']
                ),
                'html' => true
              )
            );
          }else
          {
            $str .='<li  class="has-sub">';
            $str .=l($subItem['link']['link_title'],
              $subItem['link']['link_path'],
              array(
                'attributes' => array(
                  'title' => $subItem['link']['link_title'],
                  'data-bs-toggle' => 'collapse',
                  'data-bs-target' => '#sub-menu'.$i,
                  'aria-expanded' => 'false',
                  'class' => 'collapsed',
                ),
                'fragment' => '',
                'html' => true
              )
            );
          }
          // nếu có menu con
          if(count($subItem['below']) > 0){
            $str .='<ul class="collapse" id="sub-menu'.$i.'">';
            foreach($subItem['below'] as $childItem){
              if($childItem['link']['hidden'] == 0){
                if (count($childItem['below'])==0){
                  $str .='<li >'.l($childItem['link']['link_title'],
                      $childItem['link']['link_path'],
                      array(
                        'attributes' => array(
                          'title' => $item['link']['link_title'],
                        )
                      )
                    );
                }else{
                  $str .='<li>'.l($childItem['link']['link_title'],
                      $childItem['link']['link_path'],
                      array(
                        'attributes' => array(
                          'title' => $childItem['link']['link_title'],
                        ),
                        'html' => true
                      )
                    );
                }

                $str=$str.'</li>';
              }
              $i++;

            }
            $str .='</ul>';
          }
          $str .='</li>';
        }

      }
    }
  }
  return '<div class="widget-categories-menu"><h3 class="widget-title mb-25">Loại sản phẩm</h3><ul>'.$str.'</ul></div>';
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function boschchinhhang_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id)
{
    $form['quantity']['#theme_wrappers'] = array();
    $form['quantity']['#prefix'] = t('<div class="quick-product-action mt-0">
                      <div class="action-top">
                        <div class="pro-qty">');
    $form['quantity']['#suffix'] = t('</div>');
    $form['submit']['#suffix'] = t('<button class="btn btn-black"><i class="fa fa-opencart"></i>Thêm vào giỏ hàng</button></div></div>');
}
function boschchinhhang_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function boschchinhhang_form_views_form_commerce_cart_form_default_alter(&$form, &$form_state, $form_id)
{
    $length_arr = count($form['edit_quantity']);
    for ($i = 0; $i < $length_arr-1; $i++){
        $form['edit_quantity'][$i]['#theme_wrapper'] = array();
        $form['edit_quantity'][$i]['#prefix'] = t('<div class="quick-product-action"><div class="pro-qty">');
        $form['edit_quantity'][$i]['#suffix'] = t('<a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a></div></div>');
        $form['edit_delete'][$i]['#attributes']['class'] = array('d-none');
        $form['edit_delete'][$i]['#prefix'] = t('<a href="#" class="delete-order">×</a>');
    }
//    foreach ($form['edit_quantity'] as $item){
//        if (is_array($item)){
//            dpm($item);
//            $item['#theme_wrappers'] = array();
//            $item['#prefix'] = t('<div class="quick-product-action"><div class="pro-qty">');
//            $item['#suffix'] = t('<a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a></div></div>');
//        }
//    }
    $form['actions']['#theme_wrappers'] = array();
    $form['actions']['submit']['#prefix'] = t('<div class="cart-buttons">');
    $form['actions']['checkout']['#suffix'] = t('</div>');
    $form['actions']['checkout']['#attributes']['class'] = array(' btn-shopping update-cart');
    $form['actions']['submit']['#attributes']['class'] = array('mr-30 btn-shopping update-cart');
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function boschchinhhang_form_commerce_checkout_form_checkout_alter(&$form, &$form_state, $form_id)
{

    $form['customer_profile_billing']['commerce_customer_address']['und'][0]['name_block']['name_line']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_so_dien_thoai']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_dia_chi']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_thanh_pho']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_quan_huyen']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_phuong_xa']['und'][0]['value']['#attributes']['class'] = array('form-control');
    $form['customer_profile_billing']['field_email']['und'][0]['value']['#attributes']['class'] = array('form-control');

    $form['customer_profile_billing']['commerce_customer_address']['#prefix'] = t('<div class="row"><div class="col-md-4">');
    $form['customer_profile_billing']['commerce_customer_address']['#suffix'] = t('</div>');
    $form['customer_profile_billing']['field_so_dien_thoai']['#prefix'] = t('<div class="col-md-4">');
    $form['customer_profile_billing']['field_so_dien_thoai']['#suffix'] = t('</div></div>');

    $form['customer_profile_billing']['field_thanh_pho']['#prefix'] = t('<div class="row"><div class="col-md-4">');
    $form['customer_profile_billing']['field_thanh_pho']['#suffix'] = t('</div>');
    $form['customer_profile_billing']['field_quan_huyen']['#prefix'] = t('<div class="col-md-4">');
    $form['customer_profile_billing']['field_quan_huyen']['#suffix'] = t('</div>');
    $form['customer_profile_billing']['field_phuong_xa']['#prefix'] = t('<div class="col-md-4">');
    $form['customer_profile_billing']['field_phuong_xa']['#suffix'] = t('</div></div>');
    $form['customer_profile_billing']['field_dia_chi']['#prefix'] = t('<div class="row"><div class="col-md-4">');
    $form['customer_profile_billing']['field_dia_chi']['#suffix'] = t('</div></div>');

    $form['customer_profile_billing']['addressbook']['#prefix'] = t('<div class="row"><div class="col-md-4">');
    $form['customer_profile_billing']['addressbook']['#suffix'] = t('</div></div>');

    $form['buttons']['continue']['#prefix'] = t('<div class="cart-buttons">');
    $form['buttons']['cancel']['#suffix'] = t('</div>');

    $form['buttons']['continue']['#attributes']['class'] = array('btn-shopping mr-30');
    $form['buttons']['cancel']['#attributes']['class'] = array('btn-shopping');

    $form['buttons']['cancel']['#prefix']  = t('');

    $form['account']['login']['mail']['#attributes']['class'] = array('form-control');

    $form['account']['login']['mail']['#prefix'] = t('<div class="row"><div class="col-md-4">');
    $form['account']['login']['mail']['#suffix'] = t('</div></div>');


}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function boschchinhhang_form_commerce_checkout_form_review_alter(&$form, &$form_state, $form_id)
{
    $form['buttons']['continue']['#prefix'] = t('<div class="cart-buttons">');
    $form['buttons']['cancel']['#suffix'] = t('</div>');

    $form['buttons']['continue']['#attributes']['class'] = array('btn-shopping mr-30');
    $form['buttons']['back']['#attributes']['class'] = array('btn-shopping');

    $form['buttons']['back']['#prefix']  = t('');
}
