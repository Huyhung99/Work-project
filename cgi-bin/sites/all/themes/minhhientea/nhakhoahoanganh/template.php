<?php

/**
 ** hungd
 ** 2/16/2020 1:32 AM
 ** teamplate.php
 ** drupal-7.65
 */
function getMainMenuNhaKhoaHoangAnh()
{
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item) {
        //        dpm($item);
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li class='text-uppercase'>";
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
                $str .= '<li class="text-uppercase">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        ),
                        'external' => true,
                        'fragment' => ''
                    )
                );
            }

            // nếu có menu con
            if (count($item['below']) > 0) {
                $str .= '<ul class="dropdown text-uppercase">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0)
                        $str .= "<li class='text-uppercase'>" . l(
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



    return '<ul class="menuzord-menu">' . $str . '</ul>';
}

//function nvauk_form_alter(&$form, &$form_state, $form_id){
//  if(strpos($form_id, 'commerce_cart_add_to_cart_form')!== false){
//
//  }
//}
