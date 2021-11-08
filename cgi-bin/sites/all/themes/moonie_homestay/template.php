<?php

/**
 ** hungd
 ** 2/16/2020 1:32 AM
 ** teamplate.php
 ** drupal-7.65
 */
/**
 * @param string $type 'left' | 'right' <p>
 * @return string
 */
function getMainMenu($type = 'left')
{
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  $count = count($mainMenu); // 4 => 0 1 2 3 . 0 + 1 (0 => count/2) -1 , 2 = 4/2 -> count - 1

  if($type == 'left'){
      $i = 0;
      $j = intval($count/2)-2;
  }else{
      $i = intval($count/2)-1;
      $j = $count-1;
  }

    $k = 0;
  foreach ($mainMenu as $item) {
      if($k >= $i){
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

              } else {
                  $str .= '<li class="dropdown">';
                  $str .= l(
                      $item['link']['link_title'],
                      $item['link']['link_path'],
                      array(
                          'attributes' => array(
                              'title' => $item['link']['link_title'],
                              'class' => array('dropdown-toggle', 'disable'),
                              'data-hover' => 'dropdown'
                          )
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
      $k++;
      if($k > $j)
          break;
  }

  if($type == 'left')
    return '<ul class="nav navbar-nav navbar-left">' . $str . '</ul>';

  return  '<ul class="nav navbar-nav navbar-right">' . $str . '</ul>';
}


//function nvauk_form_alter(&$form, &$form_state, $form_id){
//  if(strpos($form_id, 'commerce_cart_add_to_cart_form')!== false){
//
//  }
//}
