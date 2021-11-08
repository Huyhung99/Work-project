<?php

/**
 ** hungd
 ** 2/16/2020 1:32 AM
 ** teamplate.php
 ** drupal-7.65
 */
function getMainMenuLogistic()
{
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li>";
                $str .= l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true
                    )
                );
            } else {
                $str .= '<li class="dropdown duonglink">';
                $str .= l($item['link']['link_title'],
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
                $str .= '<ul class="sub-menu">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0)
                        $str .= "<li>" . l($subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $item['link']['link_title']
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

    return '<ul class=" nav navbar-nav">' . $str . '</ul>';
}


//function nvauk_form_alter(&$form, &$form_state, $form_id){
//  if(strpos($form_id, 'commerce_cart_add_to_cart_form')!== false){
//
//  }
//}


/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 2/23/17
 * Time: 3:37 PM
 */




