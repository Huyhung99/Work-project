<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 9/19/17
 * Time: 10:07 PM
 */

function getMainMenuPhuongNguyenGrp(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item){
//        dpm($item);
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .='<li class="nl-simple" aria-haspopup="true">';
                $str .=l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        )
                    )
                );
            }else{
                $str .='<li aria-haspopup="true">';
                $str .=l($item['link']['link_title'].'<span class="wsarrow"></span>',
                    '',
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        ),
                      'fragment' => '',
                      'external' => TRUE,
                        'html' => true
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<ul class="sub-menu">';
                foreach($item['below'] as $subItem){
                    if($subItem['link']['hidden'] == 0)
                        $str .='<li aria-haspopup="true">'.l($subItem['link']['link_title'],
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
    return '<ul class="wsmenu-list">'.$str.'</ul>';
}

/**
 * Implements hook_form_alter().
 */
function phuongnguyengroup_form_webform_client_form_58_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn-contact-front');
    $form['submitted']['email']['#attributes']['placeholder'] = t('Email');
}

/**
 * Implements hook_form_alter().
 */
function phuongnguyengroup_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-search'){
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['title']['#theme_wrappers'] = array();
        $form['title']['#prefix'] = t('<div id="search-field" class="sidebar-div mb-20"><div class="input-group mb-3">');
        $form['title']['#suffix'] = t('<div class="input-group-append">
								    	<button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
								 	</div>
								</div></div>');
        $form['title']['#attributes']['class'] = array('form-control');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm...');

    }
}

/**
 * Implements hook_form_alter().
 */
function phuongnguyengroup_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn-contact');
}
