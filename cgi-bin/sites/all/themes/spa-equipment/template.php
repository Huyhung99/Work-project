<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 9/19/17
 * Time: 10:07 PM
 */

function getMainMenuSpaEquipment(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item){
//        dpm($item);
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .='<li>';
                $str .=l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        )
                    )
                );
            }else{
                $str .='<li class="has-child">';
                $str .=l($item['link']['link_title'],
                    '',
                    array(

                      'attributes' => array(
                        'title' => $item['link']['link_title'],
                      ),
                        'external' => TRUE,
                        'fragment' => '#',
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<ul class="sub-menu">';
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
                    }
                    else{
                        $str .='<li class="has-child">';
                        $str .=l($subItem['link']['link_title'],
                            $subItem['link']['link_path'],
                            array(
                                'fragment' => ' ',
                                'attributes' => array(
                                    'title' => $subItem['link']['link_title'],
                                    'external' => TRUE,
                                ),
                                'html' => true
                            )
                        );
                    }
                    if (count($subItem['below']) >0) {
                        $str .= '<ul class="sub-menu">';
                        foreach ($subItem['below'] as $megaItem) {
                            if ($megaItem['link']['hidden'] == 0) {
                                $str .= "<li>" . l($megaItem['link']['link_title'],
                                        $megaItem['link']['link_path'],
                                        array(
                                            'attributes' => array(
                                                'title' => $megaItem['link']['link_title'],
                                                'external' => TRUE,
                                            ),
                                            'html' => true
                                        )
                                    )."</li>";
                            }
                        }
                        $str.="</ul>";
                    }
                    $str.= "</li>";
                }
                $str .='</ul>';
            }
            $str .='</li>';
        }
    }

    return '<ul class=" nav navbar-nav">'.$str.'</ul>';
}
