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
                $str .=l($item['link']['link_title'],
                  '/'.$item['link']['link_path'],
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
function phuongnguyengroup_form_alter(&$form, &$form_state, $form_id)
{
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
  if($form['#form_id'] == 'webform_client_form_44'){
    $form['submitted']['ho_ten']['#attributes']['placeholder']=array('placeholder'=>'Họ và tên');
    $form['submitted']['dien_thoai']['#attributes']['placeholder']=array('placeholder'=>'Số điện thoại');
    $form['submitted']['email']['#attributes']['placeholder']=array('placeholder'=>'Email');
    $form['submitted']['dia_chi']['#attributes']['placeholder']=array('placeholder'=>'Địa chỉ');
  }
}

