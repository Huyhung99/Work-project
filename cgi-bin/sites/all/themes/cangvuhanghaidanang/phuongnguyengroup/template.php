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
                $str .=l($item['link']['link_title'],
                    '',
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        ),
                        'fragment' => '',
                        'external' => TRUE,
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<ul class="sub-menu">';
                foreach($item['below'] as $subItem){
                    if ($subItem['link']['hidden'] == 0){
                        if(count($subItem['below']) == 0){
                            $str .='<li aria-haspopup="true">'.l($subItem['link']['link_title'],
                                    $subItem['link']['link_path'],
                                    array(
                                        'attributes' => array(
                                            'title' => $item['link']['link_title']
                                        )
                                    )
                                )."</li>";
                        }
                        if (count($subItem['below']) > 0){
                            $str .='<li aria-haspopup="true">'.l($subItem['link']['link_title'],
                                    $subItem['link']['link_path'],
                                    array(
                                        'attributes' => array(
                                            'title' => $item['link']['link_title'],
                                            'class' => array('second-menu')
                                        )
                                    )
                                );
                            $str .='<ul class="sub-menu">';
                            foreach ($subItem['below'] as $childitem){
                                $str .='<li aria-haspopup="true">'.l($childitem['link']['link_title'],
                                        $childitem['link']['link_path'],
                                        array(
                                            'attributes' => array(
                                                'title' => $childitem['link']['link_title']
                                            )
                                        )
                                    )."</li>";
                            }
                            $str .='</ul>';
                            $str.="</li>";

                        }
                    }

                }

                $str .='</ul>';
            }
            $str .='</li>';
        }
    }

    return '<ul class="wsmenu-list">'.$str.'</ul>';
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function phuongnguyengroup_form_webform_client_form_110_alter(&$form, &$form_state, $form_id)
{
    $form['submitted']['ho_ten']['#attributes']['class'] = array('form-control name');
    $form['submitted']['dien_thoai']['#attributes']['class'] = array('form-control phone');
    $form['submitted']['email']['#attributes']['class'] = array('form-control email');
    $form['submitted']['noi_dung_ghi_chu']['#attributes']['class'] = array('form-control message');
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-blue blue-hover submit');
}

/**
 * Implements hook_form_alter().
 */
function phuongnguyengroup_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id'] =='views-exposed-form-taxonomy-term-page-search'){
        $form['title']['#attributes']['class'] = array('form-control empty');
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm ');
        $form['title']['#suffix']= t('<i class="fa fa-search block-icon"></i>');
    }
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-advanced-search'){
        $form['title']['#attributes']['class'] = array('form-control empty mb-30-search');
        $form['field_chuyen_muc_tid']['#attributes']['class'] = array('form-control empty mb-30-search');
        $form['field_loai_doanh_nghiep_tid']['#attributes']['class'] = array('form-control empty mb-30-search');
        $form['submit']['#attributes']['class'] = array('btn btn-advanced-search');
    }
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-search-en'){
        $form['title']['#attributes']['class'] = array('form-control empty');
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['title']['#attributes']['placeholder'] = t('Search ');
        $form['title']['#suffix']= t('<i class="fa fa-search block-icon"></i>');
    }
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-advanced-search-en'){
        $form['title']['#attributes']['class'] = array('form-control empty mb-30-search');
        $form['field_chuyen_muc_tid']['#attributes']['class'] = array('form-control empty mb-30-search');
        $form['field_loai_doanh_nghiep_tid']['#attributes']['class'] = array('form-control empty mb-30-search');
        $form['submit']['#attributes']['class'] = array('btn btn-advanced-search');
    }
}

