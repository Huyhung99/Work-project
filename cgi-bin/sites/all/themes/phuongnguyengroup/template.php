<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 9/19/17
 * Time: 10:07 PM
 */

function getMainMenuPhuongNguyenGrp(){
    $mainMenu = menu_tree_all_data('main-menu');
//    dsm($mainMenu);
//    exit;
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
              if($item['link']['link_path']=='<front>')
              {
                $str_link='/';
              }
              else{
                $str_link = $item['link']['link_path'];
              }
                $str .='<li aria-haspopup="true">';
                $str .=l($item['link']['link_title'].' <i class="fas fa-caret-down"></i>',
                  $str_link,
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title']
                        ),
                      'html' => true,
                      'fragment' => '',
                      'external' => TRUE,
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<ul class="sub-menu " >';
                foreach($item['below'] as $subItem){
                  $fragment = isset($subItem['link']['options']['fragment']) ? $subItem['link']['options']['fragment'] : '';
                  if($subItem['link']['hidden'] == 0)
                    $str .='<li aria-haspopup="true">'.l('<i class="far fa-angle-right"></i> '.$subItem['link']['link_title'],
                        $subItem['link']['link_path'],
                        array(
                          'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array($fragment != '' ? 'tab-link' : ''),
                          ),
                          'html' => true,
                          'fragment' => $fragment,
                        )
                      )."</li>";
                }
                $str .='</ul>';
            }
            $str .='</li>';
        }
    }
    $str .= '<li class="d-none d-md-block"><a href="#" class="btn-search"><i class="fas fa-search"></i></a></li>';
    return '<ul class="wsmenu-list"><li><a id="wsnavtoggle" class="border-none wsanimated-arrow"><span></span></a></li>'.$str.
      '<li class="d-md-none" id="li-ket-noi-menu-mobile">
          <ul class="list-unstyled list-inline">
            <li><a href="#">Kết nối</a></li>
            <li><a href="#" class="link-social"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" class="link-social"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" class="link-social"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </li>
      </ul>';
}

function getMenuOther($name){
  $mainMenu = menu_tree_all_data($name);
  $str = "";
  foreach ($mainMenu as $item){
    //        dpm($item);
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      $str .='<li>';
      $str .=l($item['link']['link_title'].' <i class="fas fa-caret-down"></i>',
        $item['link']['link_path'],
        array(
          'attributes' => array(
            'title' => $item['link']['link_title']
          ),
          'html' => true
        )
      );
      $str .='</li>';
    }
  }

  return '<ul class="menu-other-footer">'.$str.'</ul>';
}

/**
 * @param $arrDate array
 */
function getDateFromStr($arrDate){
  $arrThang = [
    '01' => 'tháng 1',
    '02' => 'tháng 2',
    '03' => 'tháng 3',
    '04' => 'tháng 4',
    '05' => 'tháng 5',
    '06' => 'tháng 6',
    '07' => 'tháng 7',
    '08' => 'tháng 8',
    '09' => 'tháng 9',
    '10' => 'tháng 10',
    '11' => 'tháng 11',
    '12' => 'tháng 12'
  ];
//  if(isset($arrThang[$arrDate[1]]))
//      return $arrThang[$arrDate[1]].', '.
//          $arrDate[0].', '.
//          $arrDate[2];
//  return
//      $arrDate[1].', '.
//      $arrDate[0].', '.
//      $arrDate[2];
  return 0;
}

function phuongnguyengroup_form_alter(&$form, &$form_state, $form_id) {
  if($form_id== 'webform_client_form_141'){
    $form['submitted']['ho_va_ten_tuyen_dung']['#prefix'] = '<div class="row"><div class="col-md-6">';
    $form['submitted']['ho_va_ten_tuyen_dung']['#suffix'] = '</div>';
    $form['submitted']['nam_sinh_tuyen_dung']['#prefix'] = '<div class="col-md-6">';
    $form['submitted']['nam_sinh_tuyen_dung']['#suffix'] = '</div></div>';

    $form['submitted']['so_dien_thoai_tuyen_dung']['#prefix'] = '<div class="row"><div class="col-md-6">';
    $form['submitted']['so_dien_thoai_tuyen_dung']['#suffix'] = '</div>';
    $form['submitted']['dia_chi_tuyen_dung']['#prefix'] = '<div class="col-md-6">';
    $form['submitted']['dia_chi_tuyen_dung']['#suffix'] = '</div></div>';

    $form['submitted']['email_tuyen_dung']['#prefix'] = '<div class="row"><div class="col-md-6">';
    $form['submitted']['email_tuyen_dung']['#suffix'] = '</div>';
    $form['submitted']['vi_tri_ung_tuyen_tuyen_dung']['#prefix'] = '<div class="col-md-6">';
    $form['submitted']['vi_tri_ung_tuyen_tuyen_dung']['#suffix'] = '</div></div>';
  }
  else if($form_id == 'comment_node_bai_viet_form'){
  }
}

/**
 * Implements hook_form_alter().
 */

function phuongnguyengroup_form_search_block_form_alter(&$form, &$form_state, $form_id)
{
    $form['search_block_form']['#attributes']['class'] = array('form-control rounded-pill shadow');
    $form['actions']['submit']['#attributes']['class'] = array('d-none');
    $form['search_block_form']['#attributes']['placeholder'] = t('Bạn tìm gì?');
    $form['search_block_form']['#field_suffix'] = t('<span class="search-mb"><i class="fas fa-search"></i></span>');
}
function createCode($str){
  $str = trim($str);
  $coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ"
  ,"ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ","ì","í","ị","ỉ","ĩ",
    "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
  ,"ờ","ớ","ợ","ở","ỡ",
    "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
    "ỳ","ý","ỵ","ỷ","ỹ",
    "đ",
    "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
  ,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
    "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
    "Ì","Í","Ị","Ỉ","Ĩ",
    "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
  ,"Ờ","Ớ","Ợ","Ở","Ỡ",
    "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
    "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
    "Đ","ê","ù","à");
  $khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
  ,"a","a","a","a","a","a",
    "e","e","e","e","e","e","e","e","e","e","e",
    "i","i","i","i","i",
    "o","o","o","o","o","o","o","o","o","o","o","o"
  ,"o","o","o","o","o",
    "u","u","u","u","u","u","u","u","u","u","u",
    "y","y","y","y","y",
    "d",
    "A","A","A","A","A","A","A","A","A","A","A","A"
  ,"A","A","A","A","A",
    "E","E","E","E","E","E","E","E","E","E","E",
    "I","I","I","I","I",
    "O","O","O","O","O","O","O","O","O","O","O","O"
  ,"O","O","O","O","O",
    "U","U","U","U","U","U","U","U","U","U","U",
    "Y","Y","Y","Y","Y",
    "D","e","u","a");
  $str = str_replace($coDau,$khongDau,$str);
  $str = trim(preg_replace("/\\s+/", " ", $str));
  $str = preg_replace("/[^a-zA-Z0-9 \-\.]/", "", $str);
  $str = strtolower($str);
  return str_replace(" ", '-', $str);;
}
function phuongnguyengroup_form_comment_form_alter(&$form, &$form_state, $form_id) {
  if (isset($form['actions']['submit'])) {
      $form['actions']['submit']['#value'] = t('Đăng bình luân');
  }
  $form['comment_body']['und'][0]['value']['#title']=t('Bình luận của bạn');
}

