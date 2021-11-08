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
              $item['link']['link_path']="/".$item['link']['link_path'];
                $str .='<li aria-haspopup="true">';
                $str .=l($item['link']['link_title'],
                  $item['link']['link_path'],
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

    return '<ul class="wsmenu-list">'.$str.'<li class="nl-simple" aria-haspopup="true"><i class="fas fa-search"></i></li></ul><form role="search" method="get" class="header-search-form display-none" action="/tim-kiem?title=">
<input type="text" value="" name="title" class="header-search-field form-control" placeholder="Tìm kiếm ...">
<button type="submit" class="header-search-submit" title="Search">Search</button>
<input type="hidden" name="field_chuyen_muc_tid" value="All">
</form>';
}
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
  if(isset($arrThang[$arrDate[1]]))
    return $arrThang[$arrDate[1]].', '.
      $arrDate[0].', '.
      $arrDate[2];
  return
    $arrDate[1].', '.
    $arrDate[0].', '.
    $arrDate[2];
}
/**
 * Implements hook_webform_exporters_alter().
 */
function phuongnguyengroup_form_views_exposed_form_alter(&$form, &$form_state, $fform_id) {
  if($form['#id'] == 'views-exposed-form-taxonomy-term-page-tim-kiem'){
    $form['title']['#attributes']['class'] = array('form-control');
    $form['field_chuyen_muc_tid']['#attributes']['class'] = array('form-control');
  }
  if($form['#id'] =='views-exposed-form-taxonomy-term-page-bang-danh-sach-hoc-sinh')
  {
    $form['#prefix']='<div class="du_lieu_form">';
    $form['#suffix']='</div>';
    $form['title']['#attributes']['class'] = array('form-control');
    $form['field_lop_tid']['#attributes']['class'] = array('form-control');
    $form['title']['#attributes']['placeholder']=array('placeholder'=>'Tên học sinh');
    $form['field_lop_tid']['#attributes']['placeholder']=array('placeholder'=>'Tên lớp học');
    $form['field_nam_hoc_tid']['#attributes']['class']=array('form-control');
    $form['field_nam_hoc_tid']['#attributes']['placeholder']=array('placeholder'=>'Năm học');
    $form['field_lop_tid']['#options']['All']=t('-- Chọn lớp --');
    $form['field_nam_hoc_tid']['#options']['All']=t('-- Chọn năm --');
    $form['field_phu_huynh_value']['#attributes']['class']=array('form-control');
    $form['field_phu_huynh_value']['#attributes']['placeholder']=array('placeholder'=>'Tên của bố');
    $form['field_ten_me_value']['#attributes']['class']=array('form-control');
    $form['field_ten_me_value']['#attributes']['placeholder']=array('placeholder'=>'Tên mẹ');
  }
}

function xem_thong_tin_con(){
  global $user;
  $user_can=user_load($user->uid);
  $str='<p>Chỉ có phụ huynh mới xem được thông tin con mình</p>';
  if(isset($user_can->roles[8]) && $user_can->roles[8]!='0')
  {
    $danhsachhocsinh=node_type_arr('hoc_sinh');
    $ds=array();
    foreach ($danhsachhocsinh as $itemhs)
    {
      if($user_can->uid==$itemhs->field_ten_phu_huynh['und'][0]['target_id'])
      {
        $ds[$itemhs->nid]=$itemhs;
      }
    }
    $str='';
    foreach ($ds as $hs1)
    {
      $str=$str.'
      <div class="col-md-4">
      <div class="block-giao-vien">
      <div class="img-giao-vien">
      <a href="/node/'.$hs1->nid.'"><img class="img-fluid img-responsive" typeof="foaf:Image" src="/sites/default/files/pngtree-student-glyph-black-icon-png-image_691145.jpg" alt="BÉ GỬI THƯ CHO ÔNG GIÀ NOEL" title="BÉ GỬI THƯ CHO ÔNG GIÀ NOEL"></a>
      </div>
      <div class="text-center">
      <h3 class="tile-page mt-10"><a href="/node/'.$hs1->nid.'">'.$hs1->title.'</a></h3>
      </div>
      </div> </div>';
    }
    $str='<div class="posts-holder timkiem-hoatdong pr-30"><div class="row">'.$str.'</div>
</div>';
  }
  if($str=='')
  {
    $str='Chưa có thông tin con';
  }
  return $str;
}
