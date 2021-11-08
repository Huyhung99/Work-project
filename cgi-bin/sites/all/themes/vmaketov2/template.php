<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 2/23/17
 * Time: 3:37 PM
 */
function getMainMenuVMAKETOV2(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<li class="nav-item">';
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array('nav-link')
            ),
            'html' => true
          )
        );
      }
      else
      {
        $str .='<li class="nav-item">';
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class'  => array('nav-link')
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
            $str .= '<li class="nav-item">'.l($subItem['link']['link_title'],
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
  return '<ul class="navbar-nav m-auto">'.$str.'</ul>';
}

function getNodeContentVMAKETO2($nid){
  global $user;
  if($user->uid != 0)
    $str = '<div class="all_block"><a style="font-size: 16pt" class="edit_content" href="node/'.$nid.'/edit">Sửa</a>' ;
  else
    $str = '';
  return $str.node_load($nid)->field_mo_ta_slider['und'][0]['value'].'</div>';
}

function menu_footer($name){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0 && $item['link']['link_title']!='Trang chủ'){
      // Nếu không có menu con
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
      $str .='</li>';
    }
  }
  return '<h3>'.$name.'</h3><ul class="quick-links">'.$str.'</ul>';
}
function ho_tro() {
  $danh_sach=node_load_multiple(array(),array('type'=>'bai_viet'));
}
function formSearch(){
  $str = '<div class="widget widget_search">
                        <form class="search-form" action="/tim-kiem">
                            <input type="search" class="search-field" placeholder="Tìm kiếm bài viết..." value="" name="title">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>';
  return $str;
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function vmaketov2_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{

  $form['submitted']['dien_thoai']['#theme_wrappers'] = array();
  $form['submitted']['email']['#theme_wrappers'] = array();
  $form['submitted']['dien_thoai']['#prefix'] = t('<div class="row"><div class="col-md-6">');
  $form['submitted']['dien_thoai']['#suffix'] = t('</div>');
  $form['submitted']['email']['#prefix'] = t('<div class="col-md-6">');
  $form['submitted']['email']['#suffix'] = t('</div></div>');
  $form['actions']['submit']['#attributes']['class'] = array('default-btn');
  $form['actions']['submit']['#prefix'] = t('<div class="send-btn">');
  $form['actions']['submit']['#suffix'] = t('</div>');


}
?>

