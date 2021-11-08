<?php

/*
hungd
  2/16/2020 1:32 AM
  teamplate.php
  ** drupal-7.65
  */
function getMainMenuBDSAnPhat()
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
            '<span class="title">'.$item['link']['link_title'].'</span>',
            $item['link']['link_path'],
            array(
                'attributes' => array(
                    'title' => $item['link']['link_title']
                ),
              'html' => TRUE
            )
        );
      }
      else{
        $str .= '<li>';
        $str .= l(
            $item['link']['link_title'],
            '',
            array(
                'attributes' => array(
                    'title' => $item['link']['link_title']
                ),
              'html' => TRUE,
              'fragment' => '',
              'external' => TRUE,
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
                        ),
                      'html' => TRUE,
                    )
                ) . "</li>";
        }
        $str .= '</ul>';
      }
      $str .= '</li>';

    }
  }

  return '<ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">' . $str . '</ul>';
}

function getMainMenuBDSAnPhatMobile()
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
          '<span>'.$item['link']['link_title'].'</span>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'html' => TRUE,
          )
        );
      }
      else{
        $str .= '<li>';
        $str .= l(
          $item['link']['link_title'],
          '',
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'fragment' => '',
            'external' => TRUE,
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
                  ),
                  'html' => TRUE,
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
function anphat_preprocess_node(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}


/**
 * Implements hook_form_FORM_ID_alter().
 */




function anphat_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
  // Diện tích mặt bằng từ
  $form['field_dien_tich_mat_bang_value']['min']['#attributes'] = array(
    'class' => array('form-control'),
    'placeholder' => t('Diện tích mặt bằng từ'),
  );
  $form['field_dien_tich_mat_bang_value']['min']['#prefix'] = '<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">';
  $form['field_dien_tich_mat_bang_value']['min']['#suffix'] = '</div></li>';

//  Diện tích mb đến
  $form['field_dien_tich_mat_bang_value']['max']['#attributes'] = array(
    'class' => array('form-control'),
    'placeholder' => t('đến...')
  );
  $form['field_dien_tich_mat_bang_value']['max']['#title'] = '';
  $form['field_dien_tich_mat_bang_value']['max']['#prefix'] = '
										<li class="search_area">
										    <div class="form-group">';
  $form['field_dien_tich_mat_bang_value']['max']['#suffix'] = '</div></li></ul>';

//  Diện tích sử dụng từ
  $form['field_dien_tich_su_dung_value']['min']['#attributes'] = array(
    'class' => array('form-control'),
    'placeholder' => t('Diện tích sử dụng từ')
  );
  $form['field_dien_tich_su_dung_value']['min']['#title'] = '';
  $form['field_dien_tich_su_dung_value']['min']['#prefix'] = '<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">';
  $form['field_dien_tich_su_dung_value']['min']['#suffix'] = '</div></li>';

  //  Diện tích sử dụng đến
  $form['field_dien_tich_su_dung_value']['max']['#attributes'] = array(
    'class' => array('form-control'),
    'placeholder' => t('đến...')
  );
  $form['field_dien_tich_su_dung_value']['max']['#title'] = '';
  $form['field_dien_tich_su_dung_value']['max']['#prefix'] = '
										<li class="search_area">
										    <div class="form-group">';
  $form['field_dien_tich_su_dung_value']['max']['#suffix'] = '</div></li></ul>';

//  Diện tích sử dụng từ
  $form['field_gia_value']['min']['#attributes'] = array(
    'class' => array('form-control'),
    'placeholder' => t('Giá từ')
  );
  $form['field_gia_value']['min']['#title'] = '';
  $form['field_gia_value']['min']['#prefix'] = '<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">';
  $form['field_gia_value']['min']['#suffix'] = '</div></li>';

  //  Diện tích sử dụng đến
  $form['field_gia_value']['max']['#attributes'] = array(
    'class' => array('form-control'),
    'placeholder' => t('đến...')
  );
  $form['field_gia_value']['max']['#title'] = '';
  $form['field_gia_value']['max']['#prefix'] = '
										<li class="search_area">
										    <div class="form-group">';
  $form['field_gia_value']['max']['#suffix'] = '</div></li></ul>';

  // Hướng
  $form['field_huong_value']['#attributes'] = array(
    'class' => array('form-control')
  );
  $form['field_huong_value']['#empty'] = 'Hướng';
  $form['field_huong_value']['#prefix'] = '<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">';
  $form['field_huong_value']['#suffix'] = '</div></li></ul>';

  //  Diện tích sử dụng đến
  $form['field_khu_vuc_tid']['#attributes'] = array(
    'class' => array('form-control')
  );
  $form['field_khu_vuc_tid']['#empty'] = 'Khu vực';

  $form['field_khu_vuc_tid']['#prefix'] = '<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">';
  $form['field_khu_vuc_tid']['#suffix'] = '</div></li></ul>';

  //  Tiêu đề
  $form['title']['#attributes'] = array(
    'class' => array('form-control'),
    'placeholder' => 'Tiêu đề'
  );
  $form['title']['#prefix'] = '<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">';
  $form['title']['#suffix'] = '</div></li></ul>';

  //  Tiêu đề
  $form['submit']['#attributes'] = array(
    'class' => array('btn', 'btn-block', 'btn-thm'),
  );
  $form['submit']['#value'] = t('Tìm kiếm');
  $form['submit']['#prefix'] = '<ul class="sasw_list style2 mb0"><li><div class="search_option_button">';
  $form['submit']['#suffix'] = '</div></li></ul>';
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function anphat_form_webform_client_form_45_alter(&$form, &$form_state, $form_id)
{

    $form['submitted']['ho_ten']['#attributes']= array(
        'class' => array('form-control','col-md-6'),
        'placeholder' => t('Nhập đầy đủ họ tên')
    );
    $form['submitted']['dien_thoai']['#attributes']= array(
        'class' => array('form-control','col-md-6'),
        'placeholder' => t('Nhập số điện thoại')
    );
    $form['submitted']['email']['#attributes']= array(
        'class' => array('form-control','col-md-6'),
        'placeholder' => t('Nhập email')
    );
    $form['submitted']['khu_vuc_can_mua']['#attributes']= array(
        'class' => array('form-control','col-md-6'),
        'placeholder' => t('Nhập khu vực cần mua')
    );
    $form['submitted']['gia']['#attributes']= array(
        'class' => array('form-control','col-md-6'),
        'placeholder' => t('Nhập giá từ...đến...')
    );
    $form['submitted']['ghi_chu']['#attributes']= array(
        'class' => array('form-control','col-md-12'),
    );
}


