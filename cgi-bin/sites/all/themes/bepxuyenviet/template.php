<?php
function getMainMenuMinhHienStore(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  $danhmucsanpham = menu_tree_all_data('menu-danh-muc-san-pham');
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
        $str .='<li class="has-sub-menu">';
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
          $count_sub = count($item['below']);
          if ($count_sub > 6){
              $grid = 'grid';
          }else{
              $grid = '';
          }
        $str .='<ul class="drop-menu '.$grid.'">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0){
              if (count($subItem['below'])==0){
                  $str .='<li>'.l($subItem['link']['link_title'],
                          $subItem['link']['link_path'],
                          array(
                              'attributes' => array(
                                  'title' => $item['link']['link_title']
                              ),
                              'html' => true
                          )
                      );
              }else{
                  $str .="<li>".l($subItem['link']['link_title'].'<i class="fa fa-angle-right"></i>',
                          $subItem['link']['link_path'],
                          array(
                              'attributes' => array(
                                  'title' => $subItem['link']['link_title']
                              ),
                              'html' => true
                          )
                      );
              }
              if (count($subItem['below']) > 0){
                  $str .='<ul class="child-menu">';
                  foreach ($subItem['below'] as $childItem){
                      $str .="<li>".l($childItem['link']['link_title'],
                          $childItem['link']['link_path'],
                          array(
                              'attributes' => array(
                                  'title' => $childItem['link']['link_title'],
                              ),
                              'html'=> true
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
      $string='';
      if($item['link']['link_title']=='Sản phẩm')
      {
        $array=array();
        foreach ($danhmucsanpham as $itemmenu)
        {
          if($itemmenu['link']['hidden']!=1)
          {
            $string=$string.l($itemmenu['link']['link_title'],
                $itemmenu['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $itemmenu['link']['link_title'],
                    'class'=>'megatitle'
                  ),
                  'fragment' => '',
                  'html' => true
                )
              );
            if(count($itemmenu['below'])>=1)
            {
              foreach ($itemmenu['below'] as $item_menu)
              {
                if($item_menu['link']['hidden']!=1)
                {
                  $string=$string.l($item_menu['link']['link_title'],
                      $item_menu['link']['link_path'],
                      array(
                        'attributes' => array(
                          'title' => $item_menu['link']['link_title'],
                        ),
                        'fragment' => '',
                        'html' => true
                      )
                    );
                }
              }
            }
            array_push($array,'<span>'.$string.'</span>');
            $string='';
          }
        }
        $string=implode('',$array);
        $str .='<div class="megamenu">'.$string.'</div></li>';
      }
      else
      {
        $str .='</li>';
      }
    }
  }
  return "<ul class='nav-menu'>{$str}</ul>";
}
function getMainMenuMinhHienStoremmobile(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  $danhmucsanpham = menu_tree_all_data('menu-danh-muc-san-pham');
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        if($item['link']['link_title']=="Sản phẩm")
        {
          $str .="<li>";
          $stringxong=l($item['link']['link_title'],
            $item['link']['link_path'],
            array(
              'attributes' => array(
                'title' => $item['link']['link_title']
              ),
              'html' => true
            )
          );
          $str .='<div class="d-flex">'.$stringxong.'<i class="fa fa-sort-desc click_menu" aria-hidden="true"></i></div>';
        }
        else
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
        }

      }else
      {
        $str .='<li class="mb_con">';
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
        $str .='<ul>';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0){
            if (count($subItem['below'])==0){
              $str .="<li>".l($subItem['link']['link_title'],
                  $subItem['link']['link_path'],
                  array(
                    'attributes' => array(
                      'title' => $item['link']['link_title']
                    )
                  )
                );
            }else{
              $str .="<li>".l($subItem['link']['link_title'].'<i class="fa fa-angle-right"></i>',
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
              $str .='<ul class="child-menu">';
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
      $string='';
      if($item['link']['link_title']=='Sản phẩm')
      {
        $array=array();
        foreach ($danhmucsanpham as $itemmenu)
        {
          if($itemmenu['link']['hidden']!=1)
          {
            $string=$string.l($itemmenu['link']['link_title'],
                $itemmenu['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $itemmenu['link']['link_title'],
                    'class'=>'megatitle'
                  ),
                  'fragment' => '',
                  'html' => true
                )
              );
            if(count($itemmenu['below'])>=1)
            {
              foreach ($itemmenu['below'] as $item_menu)
              {
                if($item_menu['link']['hidden']!=1)
                {
                  $string=$string.l('<i class="fa fa-angle-double-right" aria-hidden="true"></i>'.$item_menu['link']['link_title'],
                      $item_menu['link']['link_path'],
                      array(
                        'attributes' => array(
                          'title' => $item_menu['link']['link_title'],
                        ),
                        'fragment' => '',
                        'html' => true
                      )
                    );
                }
              }
            }
            array_push($array,'<span>'.$string.'</span>');
            $string='';
          }
        }
        $string=implode('',$array);
        $str .='<div class="megamenu d-none">'.$string.'</div></li>';
      }
      else
      {
        $str .='</li>';
      }
    }
  }
  return '<ul ><li class="display-none-pc"><div class="search-icon  form-edit">
          <div class="form_tim_kiem">
          <div class="menu-search-box">
          <form action="/tim-kiem" method="get" class="text-center">
          <input type="text" name="title" placeholder="Tìm kiếm ...">
          <input name="field_product_category_tid" class="d-none" value="All">
          <button><span class="lnr lnr-magnifier"></span></button>
          </form></div></div></div></li>'.$str.'</ul>';
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
function menutubep($name,$title)
{
  $danhmucsanpham = menu_tree_all_data('menu-danh-muc-san-pham');
  $array=array();
  foreach ($danhmucsanpham as $itemmenu)
  {
    $string='';
    if($itemmenu['link']['link_title']==$name)
    if($itemmenu['link']['hidden']!=1)
    {
      if(count($itemmenu['below'])>=1)
      {
        foreach ($itemmenu['below'] as $item_menu)
        {
          if($item_menu['link']['hidden']!=1)
          {
            $string=$string.'<li>';
            $string=$string.l('<i class="fa fa-angle-double-right" aria-hidden="true"></i>'.$item_menu['link']['link_title'],
                $item_menu['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item_menu['link']['link_title'],
                  ),
                  'fragment' => '',
                  'html' => true
                )
              );
            $string=$string.'</li>';
          }
        }
      }
      array_push($array,$string);
    }
  }
  $string=implode('',$array);
  $string='<ul>'.$string.'</ul>';
  $string='<div class="sticky-sadown">
              <div class="catagory-menu-title">
							<h3>'.$title.'</h3>
						</div><div class="catagory-menu">
							<nav>
							'.$string.'
							</nav>
						</div>
						</div>';
  return $string;
}
function thu_nhiem(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul>';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0){
            $str .="<li>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  )
                )
              )."</li>";
            $str .= "</li>";
          }
        }
        $str .='</ul>';
      }
  }
  return $str;
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


function minhhienstore2_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}
function minhhienstore2_form_commerce_cart_add_to_cart_form_alter(&$form, &$form_state, $form_id)
{
    $form['submit']['#attributes']['class'] = array('single_add_to_cart_button hyper-page');
    $form['quantity']['#attributes']['class'] = array('form-control');
    $form['quantity']['#title'] = t('Số lượng');
    $form['field_product'][0]['attributes']['field_gia_phu']['#attributes']['class'] = array('form-control');
}

/**
 * Implements hook_form_alter().
 */
function minhhienstore2_form_views_form_commerce_cart_form_default_alter(&$form, &$form_state, $form_id)
{

    $form['edit_quantity'][0]['#attributes']['title'] = t('Số lượng');
    $form['actions']['submit']['#prefix'] = t('<div class="buttons-cart">');
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
    $form['customer_profile_billing']['#prefix'] = t('<div class="row"><div class="col-md-6">');
    $form['customer_profile_billing']['#suffix'] = t('</div></div>');

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
        $form['field_product_category_tid']['#attributes']['class'] = array('form-control');
        $form['submit']['#attributes']['class'] = array('form-control form-full btn-search');
        $form['title']['#attributes']['class'] = array('form-control mb-30');
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
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-search-product-mobile'){
        $form['title']['#suffix'] = t('<button class="search-btn"><i class="icon-search"></i></button>');
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm sản phẩm...');
        $form['title']['#theme_wrappers'] = array();
    }
    if ($form['#id'] =='views-exposed-form-quan-li-don-hang-bao-gia-page-quan-ly-don-hang-bao-gia'){
        $form['#attributes']['class'] = array('form-filter');
        $form['field_so_dien_thoai_value']['#theme_wrappers'] = array();
        $form['field_so_dien_thoai_value']['#attributes']['class'] = array('form-control filter-phone');
        $form['submit']['#attributes']['class'] = array('form-control btn-submit');
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
    $form['actions']['submit']['#attributes']['class'] = array('btn submit-button submit-btn');
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

//function minhhienstore2_preprocess_taxonomy_term(&$variables) {
//    $term = $variables['machine_name'];
//    $vocabulary = $variables['vocabulary_machine_name'];
//    $variables['theme_hook_suggestions'][] = 'taxonomy_term__'.$vocabulary.'__'.$term;
//}
function getCategories($id){
    $arr = taxonomy_get_vocabularies($id);
    dpm($arr);
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function minhhienstore2_form_webform_client_form_1965_alter(&$form, &$form_state, $form_id) {
  global $user;
  $link='/';
  if(isset($user->roles[3]))
  {
    $link='/node/1966/edit';
  }
  $form['#prefix']=t('<div class="container mt-20"><div class="row"><div class="col-tu-che"><div class="background-form-tim align-items-center d-flex height-full">');
  $form['#suffix']=t('</div></div><div class="col-tu-che"><a href="'.$link.'" class="align-items-center d-flex height-full">'.node_load(1966)->body['und'][0]['value'].'</a></div></div></div>');
  $form['submitted']['ho_ten']['#prefix']=t('<div class="row"><div class="col-md-6">');
  $form['submitted']['ho_ten']['#suffix']=t('</div>');
  $form['submitted']['so_dien_thoai']['#prefix']=t('<div class="col-md-6">');
  $form['submitted']['so_dien_thoai']['#suffix']=t('</div>');
  $form['submitted']['ghi_chu_nhu_cau']['#prefix']=t('<div class="col-md-12">');
  $form['submitted']['ghi_chu_nhu_cau']['#suffix']=t('</div></div>');
}

function sidebar_right_chuyen_muc()
{
  $mainMenu=menu_tree_all_data('menu-loai-san-pham-ban-san');
  $str='';
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<div class="has-sub-menu-1">';
        $str .='<p>'.l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'html' => true
          )
        ).'</p>';
      }else
      {
        if($item['link']['link_title'])
        // nếu có menu con
        $str .='<div class="has-sub-menu-1">';
        $str .='<p>'.l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
            ),
            'fragment' => '',
            'html' => true
          )
        ).'</p>';
      }
      // menu con
      $grid = '2';
      $icon='<i class="fa fa-angle-right" aria-hidden="true"></i>';
      if(trim($item['link']['link_title'])=="THÙNG TỦ DƯỚI" || trim($item['link']['link_title'])=="THÙNG TỦ TRÊN")
      {
        $str.='<div class="has-sub-menu-2 pl-30"><p><i class="fa fa-angle-right" aria-hidden="true"></i> KÍCH THƯỚC TIÊU CHUẨN</p>';
        $grid = '3';
        $icon='<i class="fa fa-angle-double-right" aria-hidden="true"></i>';
      }
      if(count($item['below']) > 0){
        $count_sub = count($item['below']);
        $str .='<div class="has-sub-menu-'.$grid.' pl-30">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0){
            if (count($subItem['below'])==0){
              $str .='<p>'.$icon.' '.l($subItem['link']['link_title'],
                  $subItem['link']['link_path'],
                  array(
                    'attributes' => array(
                      'title' => $item['link']['link_title']
                    )
                  )
                );
            }else{
              $str .='<p>'.$icon.' '.l($subItem['link']['link_title'],
                  $subItem['link']['link_path'],
                  array(
                    'attributes' => array(
                      'title' => $subItem['link']['link_title']
                    ),
                    'html' => true
                  )
                );
            }
            if (count($subItem['below']) > 0){
              $str .='<div class="has-sub-menu-3 pl-30">';
              foreach ($subItem['below'] as $childItem){
                $str .='<p><i class="fa fa-angle-double-right" aria-hidden="true"></i> '.l($childItem['link']['link_title'],
                    $childItem['link']['link_path'],
                    array(
                      'attributes' => array(
                        'title' => $childItem['link']['link_title'],
                      )
                    )
                  )."</p>";
              }
              $str .='</div>';
            }

          }

        }
        $str .='</div>';
      }
      $string='';
      $str .='</div>';
      if(trim($item['link']['link_title'])=="THÙNG TỦ DƯỚI" || trim($item['link']['link_title'])=="THÙNG TỦ TRÊN")
      {
        $str.='</div>';
      }
    }
  }
  return '<div class="back-ground-sidebar">'.$str.'</div>';
}



