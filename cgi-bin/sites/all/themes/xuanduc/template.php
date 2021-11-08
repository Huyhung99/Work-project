<?php

/*
hungd
  2/16/2020 1:32 AM
  teamplate.php
  ** drupal-7.65
  */
function getMainMenuNhomKinhHungPhat()
{
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item) {
    //        dpm($item);
    if ($item['link']['hidden'] == 0) {
      // Nếu không có menu con
      if (count($item['below']) == 0) {
        $str .= "<li>";
        $str .= l(
            $item['link']['link_title'],
            $item['link']['link_path'],
            array(
                'attributes' => array(
                    'title' => $item['link']['link_title']
                )
            )
        );
      }
      else{
        $str .= '<li class="dropdown">';
        $str .= l(
            $item['link']['link_title'],
            $item['link']['link_path'],
            array(
                'attributes' => array(
                    'title' => $item['link']['link_title'],
                    'external' => false,
                ),
                'fragment' => '#',
                'html' => true
            )
        );
      }

      // nếu có menu con
      if (count($item['below']) > 0) {
        $str .= '<ul>';
        foreach ($item['below'] as $subItem) {
          if ($subItem['link']['hidden'] == 0)
            $str .= "<li>" . l(
                    $subItem['link']['link_title'],
                    $subItem['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        )
                    )
                ) . "</li>";
        }
        $str .= '</ul>';
      }
      $str .= '</li>';

    }
  }

  return '<ul class="navigation clearfix">' . $str . '</ul>';
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function nhomkinh_form_webform_client_form_104_alter(&$form, &$form_state, $form_id) {
  $form['submitted']['ho_va_ten']['#prefix']='<div class="row"><div class="col-md-12 form-group">';
  $form['submitted']['ho_va_ten']['#suffix']='</div>';
  $form['submitted']['so_dien_thoai']['#prefix']='<div class="col-md-12 form-group">';
  $form['submitted']['so_dien_thoai']['#suffix']='</div>';
  $form['submitted']['noi_dung_tu_van']['#prefix']='<div class="col-md-12 form-group">';
  $form['submitted']['noi_dung_tu_van']['#suffix']='</div></div>';
  $form['#attributes']['class']=array('webform-client-form','webform-client-form-104','contact-form');
  $form['actions']['submit']['#attributes']['class']=array('theme-btn','btn-style-two');
}
function menu_footer(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str='';
  foreach ($mainMenu as $item)
  {
    if($item['link']['hidden']==0)
    {
      if($item['link']['link_path']=='')
      {
        $item['link']['link_path']=='/';
      }
      $str=$str.'<li><a href="'.$item['link']['link_path'].'">'.$item['link']['title'].'</a></li>';
    }
  }
  $str = '
<h3 class="widget-title lienket"><a>LIÊN KẾT</a></h3>
<div class="widget-content">
<ul>
  '.$str.'
</ul>
</div>';
  return $str;
}
function danh_muc_footer(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str='';
  foreach ($mainMenu as $item)
  {
    if($item['link']['link_title']=='Sản phẩm')
    {
      foreach ($item['below'] as $dulieu)
      {
        if($dulieu['link']['link_path']=='')
        {
          $dulieu['link']['link_path']=='/';
        }
        $str=$str.'<li><a href="'.$dulieu['link']['link_path'].'">'.$dulieu['link']['link_title'].'</a></li>';
      }
    }
  }
  $str = '
<h3 class="widget-title lienket"><a>Danh mục sản phẩm</a></h3>
<div class="widget-content">
<ul>
  '.$str.'
</ul>
</div>';
  return $str;
}
function nhomkinh_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}
/**
 * Implements hook_form_alter().
 */
function nhomkinh_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-search-product'){
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['title']['#attributes']['class'] = array('form-control search-product');
        $form['title']['#theme_wrappers'] = array();
        $form['title']['#suffix'] = t('<button type="submit"><i class="far fa-search"></i></button>');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm sản phẩm...');
    }

}

/**
 * Implements hook_form_alter().
 */
function nhomkinh_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-submit');
}

