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
                            $str .='<li aria-haspopup="true">'.l($subItem['link']['link_title'].' <i class="fas fa-caret-right"></i>',
                                    $subItem['link']['link_path'],
                                    array(
                                        'attributes' => array(
                                            'title' => $item['link']['link_title'],
                                            'class' => array('second-menu')
                                        ),
                                        'html' => true
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

function getMenuOther($name){
    $mainmenu = menu_tree_all_data($name);
    $str = "";
    foreach ($mainmenu as $item){
        //        dpm($item);
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            $str .='<li>';
            $str .='<span><i class="fas fa-chevron-right"></i> '.l($item['link']['link_title'],
                $item['link']['link_path'],
                array(
                    'attributes' => array(
                        'title' => $item['link']['link_title']
                    ),
                    'html' => true
                )
            );
            $str .='</span></li>';
        }
    }
    return '<ul class="clearfix">'.$str.'</ul>';
}
/**
 * Implements hook_form_alter().
 */
function phuongnguyengroup_form_webform_client_form_87_alter(&$form, &$form_state, $form_id)
{
    $form['#attributes']['class'] = array('row hero-form bg-blue');

    $form['submitted']['ho_ten']['#prefix'] = t('<div class="col-md-12 white-color">
                                        <h4 class="h4-xs">Để lại thông tin</h4>	
                                    </div>');;

    $form['submitted']['so_dien_thoai']['#title_display'] = 'invisible';
    $form['submitted']['ho_ten']['#title_display'] = 'invisible';
    $form['submitted']['email']['#title_display'] = 'invisible';
    $form['submitted']['noi_dung_ghi_chu']['#title_display'] = 'invisible';

    $form['submitted']['ho_ten']['#attributes']['placeholder'] = t('Họ tên*');
    $form['submitted']['email']['#attributes']['placeholder'] = t('Email*');
    $form['submitted']['so_dien_thoai']['#attributes']['placeholder'] = t('Số điện thoại*');
    $form['submitted']['noi_dung_ghi_chu']['#attributes']['placeholder'] = t('Nội dung ghi chú');

    $form['actions']['submit']['#attributes']['class'] = array('btn btn-orange tra-white-hover submit');
    $form['actions']['submit']['#value'] = t('Để lại thông tin');
}

/**
 * Implements hook_form_alter().
 */
function phuongnguyengroup_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id']=='views-exposed-form-taxonomy-term-page-tim-kiem'){
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['#info']['filter-title']['#attributes']['class'] = array('form-control');
        $form['#info']['filter-title']['#attributes']['placeholder'] = t('Tìm kiếm');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm');
        $form['title']['#attributes']['class'] = array('form-control');
        $form['title']['#prefix'] = t('<div class="input-group mb-3">');
        $form['title']['#suffix'] = t('<div class="input-group-append">
								    	<button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
								 	</div></div ">');
        $form['title']['#theme_wrappers'] = array();
    }
}

/**
 * Implements hook_form_alter().
 */
function phuongnguyengroup_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-blue blue-hover submit');
}
