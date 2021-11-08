<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 2/23/17
 * Time: 3:37 PM
 */
function getMainMenuNNDKMobile($class = ''){
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
        $str .='<li>';
        $str .=l($item['link']['link_title'].' <i class="fa fa-angle-down"></i>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => ['tree-toggler', 'nav-header']
            ),
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="nav nav-list tree">';
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
function getMainMenuNNDK($class = ''){
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
        $str .='<ul class="dropdown">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0){
            $str .="<li>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $subItem['link']['link_title']
                  )
                )
              );
            if(count($subItem['below']) > 0){
              $str .='<ul class="dropdown">';
              foreach($subItem['below'] as $subItem2){
                if($subItem2['link']['hidden'] == 0) {
                  $str .= "<li>" . l($subItem2['link']['link_title'],
                      $subItem2['link']['link_path'],
                      array(
                        'attributes' => array(
                          'title' => $subItem2['link']['link_title']
                        )
                      )
                    ).'</li>';
                }
              }
              $str .= '</ul>';
            }
            $str.= '</li>';
          }
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }

  }

  return "<ul class='{$class}'>{$str}</ul>";
}
