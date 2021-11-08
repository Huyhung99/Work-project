<?php
function getMainMenuHiepHoiVanTai()
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
                    if(count($subItem['below']) > 0)
                    {
                      if ($subItem['link']['hidden'] == 0)
                      {
                        $str .= '<li class="has-sub-child">' . l(
                            $subItem['link']['link_title'],
                            $subItem['link']['link_path'],
                            array(
                              'attributes' => array(
                                'title' => $item['link']['link_title']
                              ),
                              'html' => TRUE,
                            )
                          );
                      }
                    }
                    else{
                      $str .= "<li>" . l(
                          $subItem['link']['link_title'],
                          $subItem['link']['link_path'],
                          array(
                            'attributes' => array(
                              'title' => $item['link']['link_title']
                            ),
                            'html' => TRUE,
                          )
                        );
                    }
                    if(count($subItem['below']) > 0){
                    $str .= '<ul class="sub-menu right-view">';
                    foreach ($subItem['below'] as $subItem2) {
                      if ($subItem2['link']['hidden'] == 0){
                        $str .= '<li class="menu-item">' . l(
                            $subItem2['link']['link_title'],
                            $subItem2['link']['link_path'],
                            array(
                              'attributes' => array(
                                'title' => $subItem2['link']['link_title']
                              )
                            )
                          );
                        $str .="</li>";
                      }
                    }
                    $str .= "</ul>";
                    $str.= "</li>";
                  }
                }
                $str .= '</ul>';
            }
            $str .= '</li>';

        }
    }

    return '<ul>' . $str . '</ul>';
}
///**
// * Implements hook_form_alter().
// */
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
 * Implements hook_form_alter().
 */
function HiepHoiVanTai_form_webform_client_form_19_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('cs-btn-one btn-primary-color btn-md btn-block');
}

function HiepHoiVanTai_form_views_exposed_form_alter(&$form, &$form_state, $fform_id)
{
  global $user;
  if($form['#id']='views-exposed-form-taxonomy-term-page-danh-sach-tau')
  {
    $form['title']['#attributes']['class'] = array('form-control');
    if(isset($form['title_1']))
    {
      $form['title']['#attributes']['placeholder'] = t('Tên tàu');
      $form['title_1']['#attributes']['class'] = array('form-control');
      $form['title_1']['#attributes']['placeholder'] = t('Tên hội viên');
    }
    else
    {
      $form['title']['#attributes']['placeholder'] = t('Tên hội viên');
      $form['field_dia_chi_value']['#attributes']['placeholder'] = t('Địa chỉ');
      $form['field_dia_chi_value']['#attributes']['class'] = array('form-control');
      if(isset($user->uid) && $user->uid!=0)
      {
        $form['field_email_value']['#attributes']['placeholder'] = t('Địa chỉ email');
        $form['field_email_value']['#attributes']['class'] = array('form-control');
        $form['field_so_di_dong_value']['#attributes']['placeholder'] = t('Số di động');
        $form['field_so_di_dong_value']['#attributes']['class'] = array('form-control');
        $form['field_dien_thoai_value']['#attributes']['placeholder'] = t('Số điện thoại');
        $form['field_dien_thoai_value']['#attributes']['class'] = array('form-control');
      }
      else
      {
        $form['field_email_value']['#attributes']['placeholder'] = t('Địa chỉ email');
        $form['field_email_value']['#attributes']['class'] = array('d-none');
        $form['field_so_di_dong_value']['#attributes']['placeholder'] = t('Số di động');
        $form['field_so_di_dong_value']['#attributes']['class'] = array('d-none');
        $form['field_dien_thoai_value']['#attributes']['placeholder'] = t('Số điện thoại');
        $form['field_dien_thoai_value']['#attributes']['class'] = array('d-none');
      }
    }
  }
}
?>
