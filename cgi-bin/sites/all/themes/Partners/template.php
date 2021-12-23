<?php

/*
hungd
  2/16/2020 1:32 AM
  teamplate.php
  ** drupal-7.65
  */
function getMainMenu()
{
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
                    'title' => $item['link']['link_title']
                ),
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
                    'class' => 'dropdown-toggle',
                    'data-toggle'=>'dropdown'
                ),
            )
        );
      }

      // nếu có menu con
      if (count($item['below']) > 0) {
        $str .= '<ul class="dropdown-menu">';
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
  return '<ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">' . $str . '</ul>';
}

function getMenuFooter()
{
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item) {
    if ($item['link']['hidden'] == 0) {
      // Nếu không có menu con
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
      // nếu có menu con
      $str .= '</li>';

    }
  }
  return '<ul>' . $str . '</ul>';
}

/**
 * Implements hook_form_alter().
 */
function partners_form_webform_client_form_28_alter(&$form, &$form_state, $form_id)
{
    global $language;
    if ($language->language == "vi"){
        $name  = "Họ tên";
        $phone = "Số điện thoại";
        $messages = "Nội dung";
        $btn = "Gửi thông tin";
    }else if ($language->language == "en"){
        $name  = "Name";
        $phone = "Phone";
        $messages = "Messages";
        $btn = "Send messages";

    }
    $form['submitted']['email']['#theme_wrappers'] = array();
    $form['submitted']['phone']['#theme_wrappers'] = array();
    $form['submitted']['name']['#theme_wrappers'] = array();
    $form['submitted']['name']['#prefix'] = t('<div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">');
    $form['submitted']['name']['#suffix'] = t('</div></div></div>');
    $form['submitted']['email']['#prefix'] = t('<div class="row"><div class="col-lg-6"><div class="form-group">');
    $form['submitted']['email']['#suffix'] = t('</div></div>');
    $form['submitted']['phone']['#prefix'] = t('<div class="col-lg-6"><div class="form-group">');
    $form['submitted']['phone']['#suffix'] = t('</div></div></div>');

    $form['submitted']['name']['#attributes']['placeholder'] = $name;
    $form['submitted']['phone']['#attributes']['placeholder'] = $phone;
    $form['submitted']['messages']['#attributes']['placeholder'] = $messages;
    $form['actions']['submit']['#value'] = $btn;
}

