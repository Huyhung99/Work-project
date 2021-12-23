<?php

/**
 ** hungd
 ** 2/16/2020 1:32 AM
 ** teamplate.php
 ** drupal-7.65
 */
function getMainMenuLogistic()
{
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li>";
                $str .= l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true
                    )
                );
            } else {
                $str .= '<li class="dropdown duonglink">';
                $str .= l($item['link']['link_title'].'<i class="fa fa-angle-down" aria-hidden="true"></i>',
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'external' => false,
                        ),
                        'fragment' => '#',
                        'html' => true
                    )
                );
            }

            // nếu có menu con
            if (count($item['below']) > 0) {
                $str .= '<ul class="sub-menu">';
                foreach ($item['below'] as $subItem) {
                    if ($subItem['link']['hidden'] == 0)
                        $str .= "<li>" . l($subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $item['link']['link_title']
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
    return '<ul class=" nav navbar-nav">' . $str . '</ul>';
}
function getMenuFooter(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li>";
                $str .= l($item['link']['link_title'],
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
                $str .= l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'external' => false,
                        ),
                        'html' => true
                    )
                );
            }
            $str .= '</li>';
        }
    }
    return '<ul>' . $str . '</ul>';

}

/**
 * Implements hook_form_alter().
 */
function logistic_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{
    global $language;
    if($language->language == "vi"){
        $name = 'Họ tên';
        $dien_thoai = 'Số điện thoại';
        $description_phone = 'Điền đúng số điện thoại của bạn, chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất!';
        $description_name = 'Điền đầy đủ họ tên của bạn';
        $email = 'Email';
        $message = 'Nội dung báo giá';
        $btn = 'LIÊN HỆ';
    }else{
        $name = 'Name';
        $email = 'Email';
        $message = 'Messages';
        $btn = 'Submit';
        $dien_thoai = 'Phone';
        $description_phone = 'Fill in your correct phone number, we will contact you as soon as possible!';
        $description_name = 'Fill in your full name';
    }
    $form['actions']['submit']['#attributes']['class'] = array('site-button');
    $form['submitted']['ho_ten']['#title'] = t($name);
    $form['submitted']['dien_thoai']['#title'] = t($dien_thoai);
    $form['submitted']['dien_thoai']['#description'] = t($description_phone);
    $form['submitted']['ho_ten']['#description'] = t($description_name);
    $form['submitted']['email']['#title'] = t($email);
    $form['submitted']['noi_dung_bao_gia']['#title'] = t($message);
    $form['actions']['submit']['#value'] = t($btn);
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function logistic_form_webform_client_form_342_alter(&$form, &$form_state, $form_id)
{
    global $language;
    if($language->language == "vi"){
        $name = 'Họ tên *';
        $email = 'Email';
        $title = 'Tiêu đề';
        $option1 = 'Vận tải đường biển';
        $option2 = 'Vận tải đường bộ';
        $option3 = 'Vận tải hàng không';
        $option4 = 'Kho bãi';
        $option5 = 'Thủ tục hải quan';
        $option6 = 'Dịch vụ tận nơi';
        $message = 'Nội dung';
        $btn = 'LIÊN HỆ';
    }else{
        $name = 'Name *';
        $email = 'Email';
        $title = 'Title';
        $option1 = 'Sea Freight';
        $option1 = 'Sea freight';
        $option2 = 'Trucking';
        $option3 = 'Air freight';
        $option4 = 'Warehousing';
        $option5 = 'Custom clearance';
        $option6 = 'Door to door services';
        $message = 'Messages';
        $btn = 'Submit';

    }
    $form['#attributes']['class'] = array('cons-contact-form2 form-transparent');
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-primary radius-md m-t20');
    $form['submitted']['noi_dung']['#suffix'] = t('<button type="submit" class="site-button ">
                                                  <span class="font-weight-700 inline-block  p-lr15">'.$btn.'</span> 
                                                </button>');
    $form['submitted']['ho_ten']['#attributes']['placeholder'] = t($name);
    $form['submitted']['email']['#attributes']['placeholder'] = t($email);
    $form['submitted']['tieu_de']['#attributes']['placeholder'] = t($title);
    $form['submitted']['dich_vu_tu_van']['#options']['Vận tải đường biển'] = t($option1);
    $form['submitted']['dich_vu_tu_van']['#options']['Vận tải đường bộ'] = t($option2);
    $form['submitted']['dich_vu_tu_van']['#options']['Vận tải hàng không'] = t($option3);
    $form['submitted']['dich_vu_tu_van']['#options']['Kho bãi'] = t($option4);
    $form['submitted']['dich_vu_tu_van']['#options']['Thủ tục hải quan'] = t($option5);
    $form['submitted']['dich_vu_tu_van']['#options']['Dịch vụ tận nơi'] = t($option6);
    $form['submitted']['noi_dung']['#attributes']['placeholder'] = t($message);

}


