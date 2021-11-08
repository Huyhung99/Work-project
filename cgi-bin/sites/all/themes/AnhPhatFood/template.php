<?php
function getMainMenuAnhPhatFood()
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
                    '',
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
/**
 * Implements hook_form_alter().
 */
function AnhPhatFood_form_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('cs-btn-one btn-primary-color btn-md btn-block');
}
function getMenuFooter(){
    $footer_menu = menu_tree_all_data('menu-menu-footer');
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
 * Implements hook_form_FORM_ID_alter().
 */
function AnhPhatFood_form_webform_client_form_1_alter(&$form, &$form_state, $form_id) {
  $form['submitted']['ho_va_ten']['#prefix']=t('<div class="row"><div class="col-md-6">');
  $form['submitted']['ho_va_ten']['#suffix']=t('</div>');
  $form['submitted']['so_dien_thoai']['#prefix']=t('<div class="col-md-6">');
  $form['submitted']['so_dien_thoai']['#suffix']=t('</div></div>');
}
?>
