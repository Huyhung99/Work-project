<?php

/*
hungd
  2/16/2020 1:32 AM
  teamplate.php
  ** drupal-7.65
  */
function getMainMenuAVNZ2($page)
{
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item) {
    if ($item['link']['hidden'] == 0) {
      // Nếu không có menu con
      if (count($item['below']) == 0) {
        $str .= '<li class="menu-item">';
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
        $str .= '<li class="menu-item menu-item-has-children">';
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
        $str .= '<ul class="sub-menu">';
        foreach ($item['below'] as $subItem) {

          if ($subItem['link']['hidden'] == 0){
            if(count($subItem['below']) == 0){
              $str .= '<li class="menu-item">';
              $str .= l(
                $subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $subItem['link']['link_title']
                  )
                )
              );
            }else{
              $str .= '<li class="menu-item menu-item-has-children">';
              $str .= l(
                $subItem['link']['link_title'],
                '',
                array(
                  'attributes' => array(
                    'title' => $subItem['link']['link_title']
                  ),
                  'fragment' => '',
                  'external' => TRUE,
                )
              );
            }
            if(count($subItem['below']) > 0){
              $str .= '<ul class="sub-menu">';
              foreach ($subItem['below'] as $subItem2) {
                if ($subItem2['link']['hidden'] == 0){
                  $str .= '<li class="menu-item">' . l(
                      $subItem2['link']['link_title'],
                      $subItem2['link']['link_path'],
                      array(
                        'attributes' => array(
                          'title' => $subItem2['link']['link_title']
                        )
                      )
                    );
                  $str .="</li>";
                }
              }
              $str .= "</ul>";
            }
            $str .="</li>";
          }
        }
        $str .= '</ul>';
      }
      $str .= '</li>';

    }
  }

  if($page['search_top_menu'])
    $str .= '<li class="menu-item search-block" >'.render($page['search_top_menu']).'</li>';

  return '<ul class="main-menu">' . $str . '</ul>';
}
function avnz_home_2_preprocess_page(&$vars) {
  // Do we have a node?
  if (isset($vars['node'])) {

    // Ref suggestions cuz it's stupid long.
    $suggests = &$vars['theme_hook_suggestions'];

    // Get path arguments.
    $args = arg();
    // Remove first argument of "node".
    unset($args[0]);

    // Set type.
    $type = "page__type_{$vars['node']->type}";

    // Bring it all together.
    $suggests = array_merge(
      $suggests,
      array($type),
      theme_get_suggestions($args, $type)
    );

    // if the url is: 'http://domain.com/node/123/edit'
    // and node type is 'blog'..
    //
    // This will be the suggestions:
    //
    // - page__node
    // - page__node__%
    // - page__node__123
    // - page__node__edit
    // - page__type_blog
    // - page__type_blog__%
    // - page__type_blog__123
    // - page__type_blog__edit
    //
    // Which connects to these templates:
    //
    // - page--node.tpl.php
    // - page--node--%.tpl.php
    // - page--node--123.tpl.php
    // - page--node--edit.tpl.php
    // - page--type-blog.tpl.php          << this is what you want.
    // - page--type-blog--%.tpl.php
    // - page--type-blog--123.tpl.php
    // - page--type-blog--edit.tpl.php
    //
    // Latter items take precedence.
  }
  // Do we have a node?
  else if (isset($vars['checkout'])) {

    // Ref suggestions cuz it's stupid long.
    $suggests = &$vars['theme_hook_suggestions'];

    // Get path arguments.
    $args = arg();
    // Remove first argument of "node".
    unset($args[0]);

    // Set type.
    $type = "page__type_{$vars['node']->type}";

    // Bring it all together.
    $suggests = array_merge(
      $suggests,
      array($type),
      theme_get_suggestions($args, $type)
    );

    // if the url is: 'http://domain.com/node/123/edit'
    // and node type is 'blog'..
    //
    // This will be the suggestions:
    //
    // - page__node
    // - page__node__%
    // - page__node__123
    // - page__node__edit
    // - page__type_blog
    // - page__type_blog__%
    // - page__type_blog__123
    // - page__type_blog__edit
    //
    // Which connects to these templates:
    //
    // - page--node.tpl.php
    // - page--node--%.tpl.php
    // - page--node--123.tpl.php
    // - page--node--edit.tpl.php
    // - page--type-blog.tpl.php          << this is what you want.
    // - page--type-blog--%.tpl.php
    // - page--type-blog--123.tpl.php
    // - page--type-blog--edit.tpl.php
    //
    // Latter items take precedence.
  }
}

/**
 * Implements hook_form_BASE_FORM_ID_alter().
 */
function avnz_home_2_form_views_exposed_form_alter(&$form, &$form_state, $fform_id) {
  if($form['#id'] == 'views-exposed-form-taxonomy-term-page-4'){
    $form['title']['#attributes']['placeholder'] = t('Tìm kiếm sản phẩm');
    $form['title']['#attributes']['id'] = t('title-product');
//    dsm($form);
  }else if($form['#id'] == 'views-exposed-form-taxonomy-term-page-tim-kiem-san-pham'){
    $form['submit']['#value'] = t('Tìm kiếm');
  }
}

