<?php
function getTopMenuDienNuocHL($class = ''){
  $mainMenu = menu_tree_all_data('menu-top-menu');
  $str = "";
  foreach ($mainMenu as $item){
    //        dpm($item);

    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<li class="nav-item active">';
        $str .='<span>'.l($item['link']['link_title'].'</span>',
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
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="child">';
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

  return "<ul class='{$class}'>{$str}</ul>";
}
function usermenu(){
  $mainMenu = menu_tree_all_data('user-menu');
  $str = "";
  $a=[0=>'ĐĂNG NHẬP', 1=>'ĐĂNG XUẤT'];
  $i=0;
  $d=0;
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .="<li class='nav-item'>";
        $str .=l($a[$i],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $a[$i]
            ),
            'html' => true
          )
        );
      }else
      {
        $str .='<li >';
        $str .=l($a[$i],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $a[$i].' <i class="fa fa-angle-down"></i><i class="sub-dropdown1  visible-sm visible-md visible-lg"></i><i class="sub-dropdown visible-sm visible-md visible-lg"></i>',
              'class' => array(
                'dropdown-toggle',
                'dropdown-link'
              )
            ),
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="linklist_menu">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li class='li-sub-mega'>".l($a[$i],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $a[$i]
                  )
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
    $i++;
  }
  if($str!=''){return str_replace('<ul class="linklist_menu"></ul>','',"<ul class='linklist_menu'>{$str}</ul>");}
  else{
    return '<ul class="linklist_menu close-border"><li><a href="/user" title="Đăng nhập " class="dropdown-toggle dropdown-link">ĐĂNG NHẬP</a></li></ul>';
  }
}
function getMenuMobile(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<li  class="nav-item">';
        $str .= l($item['link']['link_title'],
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
        $str .='<li class="nav-item navigation navigation_mobile">';
        $str .=l(
          '<span>'.$item['link']['link_title'].'</span>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array(
                'menu-mobile-link'
              )
            ),
            'html' => true
          )
        );
        $str .= l('<i class="fa fa-angle-down"></i>',
            '#',
            array(
                'attributes' => array(
                    'class' => array(
                        'arrow'
                    )
                ),
                'html' => true
            )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="menu-mobile-container_1" style="display: none;">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .='<li class=" li-sub-mega">'.l($subItem['link']['link_title'],
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

  $abc= str_replace('linklist_menu','nav navbar-nav hoverMenuWrapper',str_replace('<ul class="','<ul class="nav navbar-nav hoverMenuWrapper ',str_replace('<li>','<li class="nav-item">',usermenu())));
  return "<ul class='nav navbar-nav hoverMenuWrapper'>{$str}</ul>".$abc;
}

function getDanhMucSP(){
  $mainMenu = menu_tree_all_data('menu-danh-m-c-s-n-ph-m');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .="<li class='nav-item _icon'>";
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => "<span>{$item['link']['link_title']}</span>"
            ),
            'html' => true
          )
        );
      }else
      {
        $str .='<li class="nav-item dropdown navigation _icon">';
        $str .=l(
          "<span>{$item['link']['link_title']}</span>".' <i class="fa fa-angle-down"></i> <i class="sub-dropdown1  visible-sm visible-md visible-lg"></i> <i class="sub-dropdown visible-sm visible-md visible-lg"></i>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array(
                'dropdown-toggle',
                'dropdown-link'
              )
            ),
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="dropdown-menu">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .=' <li class="li-sub-mega">'.l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title'],
                    'tabindex' => -1
                  )
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
  }

  return '<ul class="navigation_links_left dropdown-menu">'.$str.'</ul>';
}

function getMainMenu(){
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
        $str .='<li class="nav-item dropdown navigation">';
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'].' <i class="fa fa-angle-down"></i><i class="sub-dropdown1  visible-sm visible-md visible-lg"></i><i class="sub-dropdown visible-sm visible-md visible-lg"></i>',
              'class' => array(
                'dropdown-toggle',
                'dropdown-link'
              )
            ),
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="dropdown-menu">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li class='li-sub-mega'>".l($subItem['link']['link_title'],
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
  return "<ul class='navigation_links'>{$str}</ul>";
}



/**
 * Implements hook_form_BASE_FORM_ID_alter().
 */
function avnzhealth_form_views_exposed_form_alter(&$form, &$form_state, $form_id) {
  if($form['#id'] == 'views-exposed-form-taxonomy-term-page-18'){
    $form['title']['#attributes']['placeholder'] = t('Tìm kiếm sản phẩm');
  }
}
function avnzhealth_insert_drupal_form_tag($mergevar, $placeholder) {

    // Special cases for MailChimp hidden defined fields:
    if ($mergevar->public === FALSE) {
        $input['#type'] = 'hidden';
        $input['#access'] = FALSE;
    }

    return $input;
}
/**
 * Implements hook_form_alter().
 */
function avnzhealth_form_commerce_checkout_form_checkout_alter(&$form, &$form_state, $form_id)
{
//    $thanh_pho = array(
//        0=>t('An Giang'),
//        1=>t('Bà Rịa – Vũng Tàu'),
//        2=>t('Bắc Giang'),
//        3=>t('Bắc Kạn'),
//        4=>t('Bạc Liêu'),
//        5=>t('Bắc Ninh'),
//        6=>t('Bến Tre'),
//        7=>t('Bình Định'),
//        8=>t('Bình Dương'),
//        9=>t('Bình Phước'),
//        10=>t('Bình Thuận'),
//        11=>t('Cà Mau'),
//        12=>t('Cần Thơ'),
//        13=>t('Cao Bằng'),
//        14=>t('Đà Nẵng'),
//        15=>t('Đắk Lắk'),
//        16=>t('Đắk Nông'),
//        17=>t('Điện Biên'),
//        18=>t('Đồng Nai'),
//        19=>t('Đồng Tháp'),
//        20=>t('Gia Lai'),
//        21=>t('Hà Giang'),
//        22=>t('Hà Nam'),
//        23=>t('Hà Nội'),
//        24=>t('Hà Tĩnh'),
//        25=>t('Hải Dương'),
//        26=>t('Hải Phòng'),
//        27=>t('Hậu Giang'),
//        28=>t('Hòa Bình'),
//        29=>t('Hưng Yên'),
//        30=>t('Khánh Hòa'),
//        31=>t('Kiên Giang'),
//        32=>t('Kon Tum'),
//        33=>t('Lai Châu'),
//        34=>t('Lâm Đồng'),
//        35=>t('Lạng Sơn'),
//        36=>t('Lào Cai'),
//        37=>t('Long An'),
//        38=>t('Nam Định'),
//        39=>t('Nghệ An'),
//        40=>t('Ninh Bình'),
//        41=>t('Ninh Thuận'),
//        42=>t('Phú Thọ'),
//        43=>t('Phú Yên'),
//        44=>t('Quảng Bình'),
//        45=>t('Quảng Nam'),
//        46=>t('Quảng Ngãi'),
//        47=>t('Quảng Ninh'),
//        48=>t('Quảng Trị'),
//        49=>t('Sóc Trăng'),
//        50=>t('Sơn La'),
//        51=>t('Tây Ninh'),
//        52=>t('Thái Bình'),
//        53=>t('Thái Nguyên'),
//        54=>t('Thanh Hóa'),
//        55=>t('Thừa Thiên Huế'),
//        56=>t('Tiền Giang'),
//        57=>t('TP Hồ Chí Minh'),
//        58=>t('Trà Vinh'),
//        59=>t('Tuyên Quang'),
//        60=>t('Vĩnh Long'),
//        61=>t('Vĩnh Phúc'),
//        62=>t('Yên Bái')
//    );
//
//    $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['locality']['#type'] = 'select';
//    $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['locality']['#default_value'] = t('-- chọn --');
//    $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['locality']['#options'] =  $thanh_pho;
//    $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['locality']['#title']=t('Tỉnh');
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['administrative_area']['#attributes']=array('class' => array('form-hident'));
  $form['customer_profile_billing']['commerce_customer_address']['und'][0]['locality_block']['administrative_area']['#title']=t('');
  $form['customer_profile_billing']['addressbook']['#title']=t('');
  $form['customer_profile_billing']['addressbook']=array('#attributes'=>array('class' => array('form-hident')));

}

/**
 * Implements hook_form_FORM_ID_alter().
 */
//function remove_tabs_perm() {
//  return array('view hidden tabs');
//}
//function remove_tabs_menu_alter(&$items) {
//  $items['search']['access callback'] = 'user_access';
//  $items['search']['access arguments'] = ['view hidden tabs'];
//}
/**
 * Implements hook_user_login().
 */
//function avnzhealth_commerce_currency_info_alter(&$currencies, $langcode) {
//  if($currencies['.class']='commerce-order-handler-area-order-total')
//  {
//    $currencies['VND']['symbol'] = 'đ';
//    $currencies['VND']['symbol_placement'] = 'after';
//  }
//}

/**
 * Implements hook_user_login().
 */
/**
 * Implements hook_user_login().
 */
/**
 * Implements hook_actions_delete().
 */
/**
 * Implements hook_form_FORM_ID_alter().
 */
/**
 * Implements hook_form_FORM_ID_alter().
 */
/**
 * Implements hook_form_FORM_ID_alter().
 */
