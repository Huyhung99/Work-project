<?php
function getMenuLeMinhLand(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li>";
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html'=>true,
                    )
                );
            } else {
                $str .= '<li class="menu-item-has-children current-menu-item">';
                $str .= l(
                    $item['link']['link_title'],
                    check_plain(url($item['link']['link_path'],array())),
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true,
                        'fragment' => '',
                        'external' => TRUE,
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
    return '<ul class="navbar-nav menu-open">' . str_replace('href="tat-ca-can-ho"','href="/tat-ca-can-ho"',$str) . '</ul>';
}
function getMenu2LeMinhLand(){
  global  $user;
  $str = "";
  $str1='<li><a href="https://hpmap.vn/node/add/san-pham" class="btn-dang-tin-mien-phi"><i class="fas fa-plus-circle"></i> Đăng tin miễn phí</a></li>';
  $mainMenu = menu_tree_all_data('main-menu');
  foreach ($mainMenu as $item) {
    if ($item['link']['hidden'] == 0) {
      // Nếu không có menu con
      $icon="";
      if(isset($item['link']['options']['attributes']['title']))
      {
        $icon=$item['link']['options']['attributes']['title'];
      }
      if($item['link']['link_title']=="Đăng tin miễn phí")
      {
        if(!isset($user->nid))
        {
          $str=$str.$str1;
        }
      }
      else
      {
        if(count($item['below']) == 0)
        {
          $str .= "<li>";
          $str .= l(
            $icon.' '.$item['link']['link_title'],
            $item['link']['link_path'],
            array(
              'attributes' => array(
                'title' => $item['link']['link_title'],
              ),
              'html' =>true,
            )
          );
        }
        else {
          $str .= '<li class="menu-item-has-children current-menu-item"><i class="d-none-pc fas fa-caret-down"></i>';
          $str .= l(
            $icon.' '.$item['link']['link_title'],
            check_plain(url($item['link']['link_path'],array())),
            array(
              'attributes' => array(
                'title' => $item['link']['link_title'],
              ),
              'html' => true,
              'fragment' => '',
              'external' => TRUE,
            )

          );
        }
        // nếu có menu con
        if (count($item['below']) > 0) {
          $str .= '<ul class="sub-menu-1">';
          foreach ($item['below'] as $subItem) {
            $icon="";
            if(isset($subItem['link']['options']['attributes']['title']))
            {
              $icon=$subItem['link']['options']['attributes']['title'];
            }
            if ($subItem['link']['hidden'] == 0)
              $str .= "<li>" . l(
                  $icon.' '.$subItem['link']['link_title'],
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
        $str.= '</li>';
      }
    }
  }
  if ($user->uid != 0){
      $str.='<li class="menu-item-has-children current-menu-item"><i class="d-none-pc fas fa-caret-down"></i>
                <a href="/user"><i class="fas fa-user"></i> '. $user->name.'</a>
                <ul class="sub-menu-1">
                <li><a href="/user/logout" class="ml-10"><i class="fa fa-caret-right mr-10"></i><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
                </ul>
            </li>';
  }

//  <li><a href="/user" class="ml-10"><i class="fa fa-caret-right mr-10"></i><i class="fas fa-user"></i> Trang cá nhân</a></li>
//  <li><a href="/quan-ly-san-pham-nguoi-dung" class="ml-10"><i class="fa fa-caret-right mr-10"></i><i class="fab fa-product-hunt"></i> Quản lý SP</a></li>

  return '<ul class="menu_2">' . $str . '</ul>';
}

function node_type_arr($type){
  $arr=array();
  foreach (entity_load('node') as $item)
  {
    if($item->type==$type)
    {
      $arr[$item->nid]=$item;
    }
  }
  return $arr;
}
/**
 * Implements hook_form_alter().
 */
function leminhland_form_webform_client_form_129_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-yellow w-100');
    $form['submitted']['ho_ten']['#attributes']['placeholder'] = t('Nhập họ tên');
    $form['submitted']['so_dien_thoai']['#attributes']['placeholder'] = t('Nhập số điện thoại');
    $form['submitted']['Email']['#attributes']['placeholder'] = t('Nhập email');
}

/**
 * Implements hook_webform_exporters_alter().
 */
function leminhland_form_views_exposed_form_alter(&$form, &$form_state, $form_id) {
  if($form['#id']=='views-exposed-form-taxonomy-term-page-tim-kiem-san-pham-bat-dong-san')
  {
    $form['title']['#prefix']='<div class="rld-single-input mb-15">';
    $form['title']['#attributes']['placeholder']=array('Tên sản phẩm');
    $form['title']['#suffix']='</div>';
    $form['type']['#attributes']['class']=array('select','single-select');
    $form['submit']['#attributes']['class']=array('btn','btn-yellow');
    $form['field_gia_value']['#prefix']='<div class="rld-single-input mb-15">';
    $form['field_gia_value']['#attributes']['placeholder']=array('Giá từ');
    $form['field_gia_value']['#suffix']='</div>';
    $form['field_gia_value_1']['#prefix']='<div class="rld-single-input mb-15">';
    $form['field_gia_value_1']['#attributes']['placeholder']=array('Đến');
    $form['field_gia_value_1']['#suffix']='</div>';
  }
  if($form['#id']=='views-exposed-form-taxonomy-term-page-search-product-front'){
      $form['title']['#prefix']='<div class="rld-single-input mb-15">';
      $form['title']['#attributes']['placeholder']=array('Tên sản phẩm');
      $form['title']['#suffix']='</div>';
      $form['title']['#theme_wrappers'] = array();

      $form['field_loai_san_pham_tid']['#attributes']['class']=array('select','single-select');
      $form['field_loai_san_pham_tid_1']['#attributes']['class']=array('select','single-select');

      $form['submit']['#attributes']['class']=array('btn','btn-yellow');

  }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function leminhland_form_webform_client_form_1_alter(&$form, &$form_state, $form_id) {
    $form['actions']['submit']['#attributes']['class']=array('btn btn-yellow');
}
function leminhland_form_webform_client_form_152_alter(&$form, &$form_state, $form_id) {
    $form['submitted']['so_dien_thoai']['#prefix'] = t('<div class="row"><div class="col-md-6">');
    $form['submitted']['so_dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['so_dien_thoai']['#themes_wappers'] = array('');

    $form['submitted']['email']['#prefix'] = t('<div class="col-md-6">');
    $form['submitted']['email']['#suffix'] = t('</div></div>');
    $form['submitted']['email']['#themes_wappers'] = array('');
    $form['actions']['submit']['#attributes']['class']=array('btn btn-yellow');
}
function getmenu_footer(){
  $mainMenu = menu_tree_all_data('menu-footer');
  $str = "";
  foreach ($mainMenu as $item) {
    if ($item['link']['hidden'] == 0) {
      // Nếu không có menu con
      if (count($item['below']) == 0) {
        $str .= '<li><i class="fa fa-caret-right pd-r5px" aria-hidden="true"></i> ';
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
        $str .= '<li class="menu-item-has-children current-menu-item">';
        $str .= l(
          $item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
            ),
            'html' => true,
            'fragment' => '',
            'external' => TRUE,
          )

        );
      }
      $str .= '</li>';
    }
  }
  return '<ul>' . $str . '</ul>';
}
function cac_quan_huyen()
{
  $tat_ca_khu_vuc=taxonomy_term_load_multiple(array(), array('vid'=>taxonomy_vocabulary_get_names()['khu_vuc']->vid));
  $str='';
  $dem_s_l=0;
  $hon_nua=0;
  foreach ($tat_ca_khu_vuc as $id_taxonomy => $khu_vuc)
  {
    if($dem_s_l>(count($tat_ca_khu_vuc)/2) && $hon_nua==0)
    {
      $hon_nua=1;
      $str=$str.'</ul><ul class="khoi_thu_2">';
    }
    $ten=$khu_vuc->name;
    $path=check_plain(url('taxonomy/term/'.$id_taxonomy, array()));
    $str=$str.'<li><a href="'.$path.'"><i class="fa fa-caret-right pd-r5px" aria-hidden="true"></i> '.$ten.'</a></li>';
    $dem_s_l++;
  }
  if($hon_nua==1)
  {
    $str='<div class="d-flex"><ul>'.$str.'</ul></div>';
  }
  else
  {
    $str='<ul>'.$str.'</ul>';
  }
  return $str;
}
function khu_vuc()
{
  $tat_ca_khu_vuc=taxonomy_term_load_multiple(array(), array('vid'=>taxonomy_vocabulary_get_names()['khu_vuc']->vid));
  $str='';
  foreach ($tat_ca_khu_vuc as $id_taxonomy => $khu_vuc)
  {
    $ten=$khu_vuc->name;
    $str=$str.'<option value="'.$id_taxonomy.'">'.$ten.'</option>';
  }
  return '<option value="all">Tất cả</option>'.$str;
}
function form_sidebar(){
    $typeProperties = taxonomy_vocabulary_machine_name_load('loai_san_pham');
    $tree_typeProperties = taxonomy_get_tree($typeProperties->vid);
    $str_select_1='';
    foreach ($tree_typeProperties as $item) {
        $str_select_1=$str_select_1.'<option value="'.$item->tid.'">'.str_replace('Căn hộ tại ','',$item->name).'</option>';
    }
    $locations = taxonomy_vocabulary_machine_name_load('khu_vuc');
    $tree = taxonomy_get_tree($locations->vid);
    $str_select_2='';
    foreach ($tree as $item)
    {
        $str_select_2=$str_select_2.'<option value="'.$item->tid.'">'.str_replace('Căn hộ tại ','',$item->name).'</option>';
    }



    $exterior = taxonomy_vocabulary_machine_name_load('ngoai_that');
    $tree_exterior = taxonomy_get_tree($exterior->vid);
    $str_select_4='';
    foreach ($tree_exterior as $item)
    {
        $str_select_4=$str_select_4.'<option value="'.$item->tid.'">'.$item->name.'</option>';
    }
    $featureExterior = taxonomy_vocabulary_machine_name_load('dac_diem_noi_that');
    $tree_featureExterior = taxonomy_get_tree($featureExterior->vid);
    $str_select_5='';
    foreach ($tree_featureExterior as $item)
    {
        $str_select_5=$str_select_5.'<option value="'.$item->tid.'">'.$item->name.'</option>';
    }

    $str='<div class="support-online-show dong_tab_hien_thi">
  <div class="header-box">
    <h3>TÌM BẤT ĐỘNG SẢN</h3>
  </div>
  <div class="search-box">
    <div class="row no-gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 mb-15">
        <div class="rld-single-select">
                <select class="form-control" placeholder="Quận / Huyện" id="quan-huyen">
                                  <option value="">-- Quận / Huyện --</option>
                                </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 mb-15">
        <div class="rld-single-select">
          <select class="form-control" placeholder="Đường phố" id="duong-pho">
                                  <option value="">-- Đường phố --</option>
                                </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 mb-15">
        <div class="rld-single-select">
          <select class="form-control" id="khoang-gia">
                                  <option value="">-- Khoảng giá --</option>
                                </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 mb-15">
        <div class="rld-single-select">
          <select class="form-control" id="huong">
                                  <option value="">--Hướng --</option>
                                </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <a class="btn btn-yellow btn-search" href="#" id="btn-tim-kiem-bds">Tìm kiếm</a>
      </div>
    </div>
  </div>
</div>
  ';
    return $str;
}
function dang_ki_mien_phi()
{
  return '<a href="https://hpmap.vn/node/add/san-pham" class="hien_thi_mb"><i class="fa fa-plus" aria-hidden="true"></i> </a><div class="tuy_chinh_vi_tri_nut"><a href="https://hpmap.vn/node/add/san-pham" class="hien_thi_pc"><i class="fa fa-plus" aria-hidden="true"></i> Đăng tin miễn phí</a></div>';
}

function getNodeContent($nid){
  return node_load($nid)->field_mo_ta_slider['und'][0]['value'];
}

function getFooterHPLand($page){
  $col1 = '';
  $col2 = '';
  $col3 = '';
  $cac_quan_huyen = cac_quan_huyen();
  $getmenu_footer = getmenu_footer();
  if ($page['footer_col_1']) $col1 = html_entity_decode(render($page['footer_col_1']));
  if ($page['footer_col_2']) $col1 = html_entity_decode(render($page['footer_col_2']));
  if ($page['bottom_footer']) $col3 = render($page['bottom_footer']);
  $now = date("Y");
  return <<<HTML
<footer class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6">
        $col1
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="widget widget_nav_menu">
          <h4 class="widget-title">Khu vực</h4>
          $cac_quan_huyen
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="widget widget_nav_menu">
          <h4 class="widget-title">Liên kết</h4>
          $getmenu_footer
        </div>
        $col2
      </div>
    </div>
  </div>
   <div class="copy-right text-center">
      © $now - HPLands ® được thiết kế bởi <a
        href="https://minhhien.com.vn/" target="_blank"> <span> MinhHien Solutions.</span></a>
      $col3
    </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nhận thông tin tư vấn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form_thong_tin_tu_van" onsubmit="return false">
                    <input required="required" placeholder="Nhập họ tên (*)" class="form-control form-text required mb-15" type="text" id="edit-submitted-ho-ten" name="ho_ten" value="" size="60" maxlength="128">
                    <div class="row">
                        <div class="col-md-6">
                            <input required="required" placeholder="Nhập số điện thoại (*)" class="form-control form-text form-number required mb-15" type="text" id="edit-submitted-so-dien-thoai" name="so_dien_thoai" step="any">
                        </div>
                        <div class="col-md-6">
                            <input required="required" class="email form-control  form-text form-email mb-15" placeholder="Nhập email" type="email" id="edit-submitted-email" name="email" size="60">
                        </div>
                    </div>
                    <textarea placeholder="Nội dung" required="required" class="form-control mb-15 form-textarea" id="edit-submitted-noi-dung" name="noi_dung" cols="60" rows="5"></textarea>
                    <input type="submit"  href="#" class="btn btn-yellow form_submit_thong_tin_tu_van" value="Gửi thông tin">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>

HTML;
}

/**
 * Implements hook_form_alter().
 */
function leminhland_form_user_login_alter(&$form, &$form_state, $form_id)
{
    $form['name']['#attributes']['class'] = array('form-control col-md-4');
    $form['pass']['#attributes']['class'] = array('form-control col-md-4');
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-primary');
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-primary');
    $form['#attributes']['target'] = t('_blank');
}

/**
 * Implements hook_form_alter().
 */
function leminhland_form_user_register_form_alter(&$form, &$form_state, $form_id)
{
    $form['account']['mail']['#value'] = t('user'.rand().'@gmail.com');
    $form['account']['status']['#access'] = true;
    $form['account']['status']['#default_value'] = 1;
    $form['account']['name']['#attributes']['class'] = array('form-control ');
    $form['account']['mail']['#attributes']['class'] = array('form-control ');
    $form['account']['pass']['#attributes']['class'] = array('form-control ');
    $form['field_gioi_tinh']['#attributes']['class'] = array('d-flex');
    $form['field_so_dien_thoai_vn']['und'][0]['value']['#attributes']['class'] = array('form-control ');
    $form['field_ngay_sinh']['und'][0]['value']['#attributes']['class'] = array('form-control ');
    $form['field_dia_chi_du_an']['und'][0]['value']['#attributes']['class'] = array('form-control ');
    $form['field_dt_nguoi_gioi_thieu']['und'][0]['value']['#attributes']['class'] = array('form-control ');
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-primary btn-full');

    $form['account']['mail']['#required'] = false;
    $form['account']['mail']['#attributes']['class'] = array('d-none');
    $form['#attributes']['target'] = t('_blank');

    $form['field_ho_ten']['und'][0]['value']['#attributes']['class'] = array('form-control');

//    $form['field_ho_ten']['und'][0]['value']['#attributes']['class'] = array('form-control');
}

function leminhland_theme() {
    $items = array();

    $items['user_register_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'leminhland'),
        'template' => 'user-register-form',
        'preprocess functions' => array(
            'leminhland_preprocess_user_register_form'
        ),
    );

    return $items;
}

function leminhland_preprocess_user_register_form(&$vars) {
    $vars['intro_text'] = t('This is my super awesome reg form');
}


function leminhland_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}
?>
