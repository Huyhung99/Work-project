<?php
function getMenuNoiThat(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    $i = 0;
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                if ($i==0){
                    $str .= "<li>";
                    $str .= l(
                        '<svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40">
                        <path fill="currentColor" d="M36.8,21.8 20.2,5.3 13.7,11.9 13.7,11 13.7,9.2 8.4,9.2 8.4,11 8.4,17.1 3.7,21.8 4.7,24.5 20.2,8.9 35.8,24.5z"></path>
                        <path fill="currentColor" d="M8.4,24.2l0,9.4h23.7v-9.4L20.2,12.3L8.4,24.2z"></path>
                    </svg>',
                        $item['link']['link_path'],
                        array(
                            'attributes' => array(
                                'title' => $item['link']['link_title'],
                                'class' => array('link-home')
                            ),
                            'html' => true,
                        )
                    );
                }else{
                    $str .= "<li>";
                    $str .= l(
                        $item['link']['link_title'],
                        $item['link']['link_path'],
                        array(
                            'attributes' => array(
                                'title' => $item['link']['link_title'],
                                'class' => array('link-load')
                            ),
                        )
                    );
                }
            } else {
                $str .= '<li>';
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
            $str .= '</li>';
        }
        $i++;
    }
    return '<ul class="second-menu">' . $str . '</ul>';
}
function getNavigationNoiThat(){
    $mainMenu = menu_tree_all_data('menu-navigation-noi-that');
    $str = "";
    $i = 0;
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
                                'class' => array('link-load')
                            ),
                            'html' => true,
                        )
                    );
            } else {
                $str .= '<li>';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                    )

                );
            }
            $str .= '</li>';
        }
    }
    return '<ul>' . $str . '</ul>';
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
function noithat_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}
/**
 * Helper function to find and render a block.
 */
function render_block_content($module, $delta) {
    $output = '';
    if ($block = block_load($module, $delta)) {
        if ($build = module_invoke($module, 'block_view', $delta)) {
            $delta = str_replace('-', '_', $delta);
            drupal_alter(array('block_view', "block_view_{$module}_{$delta}"), $build, $block);

            if (!empty($build['content'])) {
                return is_array($build['content']) ? render($build['content']) : $build['content'];
            }
        }
    }
    return $output;
}

/**
 * Implements hook_form_alter().
 */
function noithat_form_webform_client_form_90_alter(&$form, &$form_state, $form_id)
{
    global $language ;
    $lang_name = $language->language ;
    if ($lang_name == 'vi'){
        $title = 'Đặt lịch hẹn';
        $name = 'Họ và tên (*)';
        $phone = 'Điện thoại (*)';
        $content = 'Nội dung';
        $select = '- Chọn -';
        $btn = 'Gửi';
    }elseif ($lang_name == 'en'){
        $title = 'Make an appointment';
        $name = 'Name (*)';
        $phone = 'Phone (*)';
        $content = 'Content';
        $select = '- None -';
        $btn = 'Submit';
    }

    $form['submitted']['ho_va_ten']['#prefix'] = t('<a class="close" href="javascript:void(0);"></a>
        <div class="title-main">
            <h2>'.$title.'</h2>
        </div><div class="require-col"><div class="input-text show">');
    $form['submitted']['ho_va_ten']['#suffix'] = t('</div>');
    $form['submitted']['ho_va_ten']['#attributes']['placeholder'] = t($name);

    $form['submitted']['email']['#prefix'] = t('<div class="input-text show">');
    $form['submitted']['email']['#suffix'] = t('</div>');
    $form['submitted']['email']['#attributes']['placeholder'] = t('Email (*)');

    $form['submitted']['dien_thoai']['#prefix'] = t('<div class="input-text show">');
    $form['submitted']['dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['dien_thoai']['#attributes']['placeholder'] = t($phone);

    $form['submitted']['chon_dia_diem']['#prefix'] = t('<div class="input-select show">');
    $form['submitted']['chon_dia_diem']['#suffix'] = t('</div>');
    $form['submitted']['chon_dia_diem']['#empty_option'] = t($select);

    $form['submitted']['chon_thoi_gian']['#prefix'] = t('<div class="input-select show">');
    $form['submitted']['chon_thoi_gian']['#suffix'] = t('</div>');
    $form['submitted']['chon_thoi_gian']['#empty_option'] = t($select);


//    $form['submitted']['noi_dung']['#prefix'] = t('<div class="input-area show">');
//    $form['submitted']['noi_dung']['#suffix'] = t('</div>');
    $form['submitted']['noi_dung']['#attributes']['placeholder'] = t($content);


    $form['actions']['submit']['#prefix'] = t('<div class="input-but show">');
    $form['actions']['submit']['#suffix'] = t('</div></div>');
    $form['actions']['submit']['#value'] = t($btn);


    $form['actions']['#theme_wrappers'] = array();



}
function noithat_form_webform_client_form_94_alter(&$form, &$form_state, $form_id)
{
    global $language ;
    $lang_name = $language->language ;
    if ($lang_name == 'vi'){
        $title = 'Nhận thông tin sản phẩm';
        $name = 'Họ và tên (*)';
        $phone = 'Điện thoại (*)';
        $content = 'Nội dung';
        $btn = 'Gửi';
    }elseif ($lang_name == 'en'){
        $title = 'Get product information';
        $name = 'Name (*)';
        $phone = 'Phone (*)';
        $content = 'Content';
        $btn = 'Submit';
    }

    $form['submitted']['ho_va_ten']['#prefix'] = t('<a class="close" href="javascript:void(0);"></a>
        <div class="title-main">
            <h2>'.$title.'</h2>
        </div><div class="require-col"><div class="input-text show">');
    $form['submitted']['ho_va_ten']['#suffix'] = t('</div>');
    $form['submitted']['ho_va_ten']['#attributes']['placeholder'] = t($name);

    $form['submitted']['email']['#prefix'] = t('<div class="input-text show">');
    $form['submitted']['email']['#suffix'] = t('</div>');
    $form['submitted']['email']['#attributes']['placeholder'] = t('Email (*)');

    $form['submitted']['dien_thoai']['#prefix'] = t('<div class="input-text show">');
    $form['submitted']['dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['dien_thoai']['#attributes']['placeholder'] = t($phone);

    $form['submitted']['noi_dung']['#attributes']['placeholder'] = t($content);


    $form['actions']['submit']['#prefix'] = t('<div class="input-but show">');
    $form['actions']['submit']['#suffix'] = t('</div></div>');
    $form['actions']['submit']['#value'] = t($btn);


    $form['actions']['#theme_wrappers'] = array();

}
function noithat_form_webform_client_form_98_alter(&$form, &$form_state, $form_id)
{
    global $language ;
    $lang_name = $language->language ;
    if ($lang_name == 'vi'){
        $name = 'Họ và tên (*)';
        $location = 'Địa chỉ';
        $phone = 'Điện thoại (*)';
        $content = 'Nội dung';
        $btn = 'Gửi';
    }elseif ($lang_name == 'en'){
        $name = 'Name (*)';
        $phone = 'Phone (*)';
        $content = 'Content';
        $btn = 'Submit';
        $location = 'Address';
    }

    $form['submitted']['ho_va_ten']['#prefix'] = t('<div class="input-text show">');
    $form['submitted']['ho_va_ten']['#suffix'] = t('</div>');
    $form['submitted']['ho_va_ten']['#attributes']['placeholder'] = t($name);

    $form['submitted']['email']['#prefix'] = t('<div class="input-text show">');
    $form['submitted']['email']['#suffix'] = t('</div>');
    $form['submitted']['email']['#attributes']['placeholder'] = t('Email (*)');

    $form['submitted']['dien_thoai']['#prefix'] = t('<div class="input-text show">');
    $form['submitted']['dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['dien_thoai']['#attributes']['placeholder'] = t($phone);

    $form['submitted']['dia_chi']['#prefix'] = t('<div class="input-text show">');
    $form['submitted']['dia_chi']['#suffix'] = t('</div>');
    $form['submitted']['dia_chi']['#attributes']['placeholder'] = t($location);

    $form['submitted']['noi_dung']['#attributes']['placeholder'] = t($content);


    $form['actions']['submit']['#prefix'] = t('<div class="input-but show">');
    $form['actions']['submit']['#suffix'] = t('</div>');
    $form['actions']['submit']['#value'] = t($btn);


    $form['actions']['#theme_wrappers'] = array();

}
?>

