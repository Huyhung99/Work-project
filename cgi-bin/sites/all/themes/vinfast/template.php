<?php


function getMenuVinfast(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li class='nav-item'>";
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('nav-link')
                        )
                    )
                );
            } else {
                $str .= '<li class="nav-item">';
                $str .= l(
                    $item['link']['link_title']." <i class='bx bx-chevron-down'></i>",
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('nav-link'),


                        ),
                            'html' => true,
                            'fragment' => '',
                            'external' => TRUE,
                    )

                );
            }

            // nếu có menu con
            if (count($item['below']) > 0) {
                $str .= '<ul class="dropdown-menu">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0)
                        $str .= "<li class='nav-item'>" . l(
                                $subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $item['link']['link_title'],
                                        'class' => array('nav-link')
                                    )
                                )
                            ) . "</li>";
                }
                $str .= '</ul>';
            }
            $str .= '</li>';
        }
    }
    return '<ul class="navbar-nav m-auto">' . $str . '</ul>';
}

/**
 * Implements hook_form_alter().
 */
function vinfast_form_alter(&$form, &$form_state, $form_id) {
  if($form['#form_id'] == 'webform_client_form_28'){
    $form['submitted']['ho_ten']['#prefix'] = '<div class="row"><div class="col-md-4">';
    $form['submitted']['ho_ten']['#suffix'] = '</div>';
    $form['submitted']['dien_thoai']['#prefix'] = '<div class="col-md-4">';
    $form['submitted']['dien_thoai']['#suffix'] = '</div>';
    $form['submitted']['email']['#prefix'] = '<div class="col-md-4">';
    $form['submitted']['email']['#suffix'] = '</div></div>';

    $form['submitted']['dia_chi']['#prefix'] = '<div class="row"><div class="col-md-8">';
    $form['submitted']['dia_chi']['#suffix'] = '</div>';
    $form['submitted']['san_pham_quan_tam']['#prefix'] = '<div class="col-md-4">';
    $form['submitted']['san_pham_quan_tam']['#suffix'] = '</div></div>';
  }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function vinfast_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-search'){
        $form['#info']['filter-title']['#attributes']['class'] = array('d-none');
        $form['#info']['filter-title']['label'] = t('');
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['#attributes']['class'] = array('search-form');
        $form['title']['#prefix'] = t('<label>');
        $form['title']['#suffix'] = t('</label><button type="submit">
                                <i class="bx bx-search-alt"></i>
                            </button>');
        $form['title']['#attributes']['class'] = array('search-field');
        $form['title']['#theme_wrappers'] = array();


    }

}

?>
