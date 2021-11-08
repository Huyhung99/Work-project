<?php
function getMainMenuFront()
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
                        ),
                        'html' => TRUE
                    )
                );
            }
            else{
                $str .= '<li class="has-sub">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        ),
                        'html' => TRUE,
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
                                        'title' => $item['link']['link_title']
                                    ),
                                    'html' => TRUE,
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
///**
// * Implements hook_form_alter().
// */
function getMenuFooter(){
    $footer_menu = menu_tree_all_data('menu-footer');
    $str = "";
    foreach ($footer_menu as $item) {
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
                        'html' => TRUE
                    )
                );
            }
            $str .= '</li>';
        }

    }
    return '<ul class="footer-widget-list">' . $str . '</ul>';
}
/**
 * Implements hook_form_alter().
*/
function DongPhuc_form_webform_client_form_99_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('cs-btn-one btn-primary-color btn-md btn-block');
}
function DongPhuc_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('cs-btn-one btn-green btn-md');
}

?>
<!--<a href="[path]" title="[title]">-->
<!--    <img  data-src="[field_image]" alt="[field_image-alt]" title="[field_image-title]" class="lozad" width="[field_image-width]" height="[field_image-height]">-->
<!--</a>-->
<!--<a href="[path]" title="[title]">[title]</a>-->