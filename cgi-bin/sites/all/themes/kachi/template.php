<?php
function getMenuKachi(){
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
                            'title' => $item['link']['link_title'],
                        )
                    )
                );
            } else {
                $str .= '<li class="menu-item-has-children">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true,
                    )

                );
            }

            // nếu có menu con
            if (count($item['below']) > 0) {
                $str .= '<ul class="sub-menu">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0)
                        $str .= "<li>" . l(
                                $subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $item['link']['link_title'],
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
    return '<ul class="nav-menu">' . $str . '</ul>';
}
function getMenuFooterKachi(){
    $mainMenu = menu_tree_all_data('menu-footer');
    $str = "";
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li>";
                $str .= l(
                    '<i class="fa fa-angle-right" aria-hidden="true"></i> '.$item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true
                    )
                );
            } else {
                $str .= '<li >';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true,
                    )

                );
            }

            // nếu có menu con
            if (count($item['below']) > 0) {
                $str .= '<ul class="sub-menu">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0)
                        $str .= "<li>" . l(
                                $subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $item['link']['link_title'],
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
    return '<ul class="sitemap-widget">' . $str . '</ul>';
}
function node_type_arr($type){
    $arr=array();
    foreach (entity_load('node') as $item)
    {
        if($item->type==$type)
        {
            $arr[$item->nid]=$item;
        }
    }
    return $arr;
}

/**
 * Implements hook_form_alter().
 */
function Kachi_form_alter(&$form, &$form_state, $form_id)
{
    $form['submitted']['ho_ten']['#attributes']['placeholder'] = t('Họ tên');
    $form['submitted']['so_dien_thoai']['#attributes']['placeholder'] = t('Số điện thoại');
    $form['submitted']['ghi_chu']['#attributes']['placeholder'] = t('Ghi chú');
}

/**
 * Implements hook_form_BASE_FORM_ID_alter().
 */
function Kachi_form_webform_client_form_51_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn-send');
}
?>

