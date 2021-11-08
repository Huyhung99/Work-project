<?php

/*
hungd
  2/16/2020 1:32 AM
  teamplate.php
  ** drupal-7.65
  */
function getMainMenuNuocMamCatHai()
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
                        )
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

//function nvauk_form_alter(&$form, &$form_state, $form_id){
//  if(strpos($form_id, 'commerce_cart_add_to_cart_form')!== false){
//
//  }
//}
function nuocmamluonghai_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function nuocmamluonghai_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-products-search'){
        $form['submit']['#attributes']['class'] = array('hidden');
        $form['title']['#field_suffix'] = t('<a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>');
        $form['title']['#attributes'] = array('class' => array('search-form'));
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm sản phẩm');
    }
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-product-search-sidebar'){
        $form['field_loai_san_pham_tid']['#attributes']['class'] = array('form-control');
        $form['title']['#attributes']['class'] = array('form-control');
    }
}

