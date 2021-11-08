<?php
function getMainMenuChaStore(){
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
                $str .='<li>';
                $str .=l($item['link']['link_title'].'<i class="fa fa-angle-down"></i>',
                    $item['link']['link_path'],
                    array(
                        'fragment' => ' ',
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'external' => TRUE,
                        ),
                        'html' => true
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<ul class="sub-menu">';
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

    return '<ul>'.$str.'</ul>';
}
function getMainMenuMobileChaStore(){
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
                $str .='<li class="menu-item-has-children">';
                $str .=l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'fragment' => ' ',
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'external' => TRUE,
                        ),
                        'html' => true
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<ul class="dropdown">';
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

    return '<ul class="mobile-menu">'.$str.'</ul>';
}
function getMenuCategories(){
    $mainMenu = menu_tree_all_data('menu-danh-muc-san-pham');
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
                $str .='<li class="menu_item_children categorie_list text-uppercase">';
                $str .=l($item['link']['link_title'].'<i class="fa fa-angle-right"></i>',
                    $item['link']['link_path'],
                    array(
                        'fragment' => ' ',
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'external' => TRUE,
                        ),
                        'html' => true
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<ul class="categories_mega_menu">';
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

    return '<ul>'.$str.'</ul>';
}

?>

