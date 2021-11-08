<?php

function getMainMenuNoiThatTamCuong(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item){
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .='<li class="nav-item">';
                $str .=l($item['link']['link_title'].'<span class="sub-nav-toggler">
 													</span>',
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('nav-link')
                        ),
                        'html' => true
                    )
                );
            }else
            {
                $str .='<li class="nav-item">';
                $str .= l($item['link']['link_title'].'<span class="sub-nav-toggler">
 													</span>',
                    $item['link']['link_path'],
                    array(
                        'fragment' => ' ',
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'external' => TRUE,
                            'class' => array('nav-link'),

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
                                    ),
                                    'html' => true
                                )
                            )."</li>";
                }
                $str .='</ul>';
            }
            $str .='</li>';
        }
    }
    return '<ul class="navbar-nav m-auto">'.$str.'</ul>';
}

/**
 * Implements hook_form_alter().
 */
function noithattamcuong_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-search'){
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['title']['#prefix'] = t('<div class="blog-search">');
        $form['title']['#suffix'] = t('<button type="submit"><i class="las la-search"></i></button></div>');
        $form['title']['#attributes']['placeholder'] = t('Search');
    }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function noithattamcuong_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{
    $form['submitted']['dien_thoai']['#prefix'] = t('<div class="row"><div class="col-md-6">');
    $form['submitted']['dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['dien_thoai']['#attributes']['placeholder']  = t('Nhập số điện thoại của bạn');
    $form['submitted']['email']['#prefix'] = t('<div class="col-md-6">');
    $form['submitted']['email']['#suffix'] = t('</div></div>');
    $form['submitted']['email']['#attributes']['placeholder']  = t('Nhập email của bạn');
    $form['submitted']['ho_ten']['#title'] = t('');
    $form['submitted']['ho_ten']['#attributes']['placeholder']  = t('Nhập họ tên của bạn');
    $form['submitted']['dien_thoai']['#title'] = '';
    $form['submitted']['ghi_chu']['#title'] = '';
    $form['submitted']['ghi_chu']['#attributes']['placeholder']  = t('Để lại ghi chú');
    $form['submitted']['email']['#title'] = '';
    $form['#node']->title = '';
    $form['actions']['submit']['#attributes']['class'] = array('btn-submit');
}
?>

