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
                $sl=Sluong_phan_tu_menu_con($item);
                $abc='';
                if($sl>0){
                  $abc='class="has-sub"';
                  }
                $str .= '<li '.$abc.'>';
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
/**
 * Implements hook_form_alter().
 */
function Sluong_phan_tu_menu_con($arr)
{
  $sl=0;
  foreach ($arr['below'] as $item)
  {
    if($item['link']['hidden']==0)
    {
      $sl++;
    }
  }
  return $sl;
}
function nst_new_form_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('cs-btn-one btn-primary-color btn-md btn-block');
}
function getMenuFooter(){
    $footer_menu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($footer_menu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
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
          $str .= '</li>';
        }
    }
    return '<ul class="footer-widget-list">' . $str . '</ul>';
}



function nst_new_form_webform_client_form_29_alter(&$form, &$form_state, $form_id) {
    global $language;
    $name_lang = $language->language;
    if ($name_lang == 'vi'){
        $hoten = 'Nhập họ tên';
        $email = 'Nhập email';
        $dien_thoai = 'Nhập số điện thoại';
        $noi_dung = 'Nội dung ghi chú';
        $name_btn = 'Gửi thông tin';
    }else{
        $hoten = 'FullName';
        $email = 'Email';
        $dien_thoai = 'Phone number';
        $noi_dung = 'Messages';
        $name_btn = 'Submit';
    }
    $form['submitted']['ho_ten']['#attributes']['placeholder'] = t($hoten);
    $form['submitted']['email']['#attributes']['placeholder'] = t($email);
    $form['submitted']['dien_thoai']['#attributes']['placeholder'] = t($dien_thoai);
    $form['submitted']['noi_dung_lien_he']['#attributes']['placeholder'] = t($noi_dung);
    $form['actions']['submit']['#value'] = t($name_btn);
}
?>

