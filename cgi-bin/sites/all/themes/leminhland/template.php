<?php
function getMenuLeMinhLand(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
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
                        )
                    )
                );
            } else {
                $str .= '<li class="menu-item-has-children current-menu-item">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true,
                        'fragment' => '',
                        'external' => TRUE,
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
                                        'title' => $item['link']['link_title'],
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
    return '<ul class="navbar-nav menu-open">' . $str . '</ul>';
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
/**
 * Implements hook_form_alter().
 */
function leminhland_form_webform_client_form_129_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-yellow w-100');
    $form['submitted']['ho_ten']['#attributes']['placeholder'] = t('Nhập họ tên');
    $form['submitted']['so_dien_thoai']['#attributes']['placeholder'] = t('Nhập số điện thoại');
    $form['submitted']['Email']['#attributes']['placeholder'] = t('Nhập email');
}

/**
 * Implements hook_webform_exporters_alter().
 */
function leminhland_form_views_exposed_form_alter(&$form, &$form_state, $form_id) {
  if($form['#id']=='views-exposed-form-taxonomy-term-page-tim-kiem-san-pham-bat-dong-san')
  {
    $form['title']['#prefix']='<div class="rld-single-input mb-15">';
    $form['title']['#attributes']['placeholder']=array('Tên sản phẩm');
    $form['title']['#suffix']='</div>';
    $form['type']['#attributes']['class']=array('select','single-select');
    $form['submit']['#attributes']['class']=array('btn','btn-yellow');
    $form['field_gia_value']['#prefix']='<div class="rld-single-input mb-15">';
    $form['field_gia_value']['#attributes']['placeholder']=array('Giá từ');
    $form['field_gia_value']['#suffix']='</div>';
    $form['field_gia_value_1']['#prefix']='<div class="rld-single-input mb-15">';
    $form['field_gia_value_1']['#attributes']['placeholder']=array('Đến');
    $form['field_gia_value_1']['#suffix']='</div>';
  }
  if($form['#id']=='views-exposed-form-taxonomy-term-page-search-product-front'){
      $form['title']['#prefix']='<div class="rld-single-input mb-15">';
      $form['title']['#attributes']['placeholder']=array('Tên sản phẩm');
      $form['title']['#suffix']='</div>';
      $form['title']['#theme_wrappers'] = array();

      $form['field_loai_san_pham_tid']['#attributes']['class']=array('select','single-select');
      $form['field_loai_san_pham_tid_1']['#attributes']['class']=array('select','single-select');

      $form['submit']['#attributes']['class']=array('btn','btn-yellow');

  }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function leminhland_form_webform_client_form_1_alter(&$form, &$form_state, $form_id) {
    $form['actions']['submit']['#attributes']['class']=array('btn btn-yellow');
}
function leminhland_form_webform_client_form_152_alter(&$form, &$form_state, $form_id) {
    $form['submitted']['so_dien_thoai']['#prefix'] = t('<div class="row"><div class="col-md-6">');
    $form['submitted']['so_dien_thoai']['#suffix'] = t('</div>');
    $form['submitted']['so_dien_thoai']['#themes_wappers'] = array('');

    $form['submitted']['email']['#prefix'] = t('<div class="col-md-6">');
    $form['submitted']['email']['#suffix'] = t('</div></div>');
    $form['submitted']['email']['#themes_wappers'] = array('');
    $form['actions']['submit']['#attributes']['class']=array('btn btn-yellow');
}
function form_sidebar(){
    $typeProperties = taxonomy_vocabulary_machine_name_load('loai_san_pham');
    $tree_typeProperties = taxonomy_get_tree($typeProperties->vid);
    $str_select_1='';
    foreach ($tree_typeProperties as $item) {
        $str_select_1=$str_select_1.'<option value="'.$item->tid.'">'.str_replace('Căn hộ tại ','',$item->name).'</option>';
    }
    $locations = taxonomy_vocabulary_machine_name_load('khu_vuc');
    $tree = taxonomy_get_tree($locations->vid);
    $str_select_2='';
    foreach ($tree as $item)
    {
        $str_select_2=$str_select_2.'<option value="'.$item->tid.'">'.str_replace('Căn hộ tại ','',$item->name).'</option>';
    }

    $typeBath = taxonomy_vocabulary_machine_name_load('loai_phong_tam');
    $treeBath = taxonomy_get_tree($typeBath->vid);
    $str_select_3='';
    foreach ($treeBath as $item)
    {
        $str_select_3=$str_select_3.'<option value="'.$item->tid.'">'.$item->name.'</option>';
    }

    $exterior = taxonomy_vocabulary_machine_name_load('ngoai_that');
    $tree_exterior = taxonomy_get_tree($exterior->vid);
    $str_select_4='';
    foreach ($tree_exterior as $item)
    {
        $str_select_4=$str_select_4.'<option value="'.$item->tid.'">'.$item->name.'</option>';
    }
    $featureExterior = taxonomy_vocabulary_machine_name_load('dac_diem_noi_that');
    $tree_featureExterior = taxonomy_get_tree($featureExterior->vid);
    $str_select_5='';
    foreach ($tree_featureExterior as $item)
    {
        $str_select_5=$str_select_5.'<option value="'.$item->tid.'">'.$item->name.'</option>';
    }

    $str='<div class="support-online-show dong_tab_hien_thi">
  <div class="header-box">
    <h3>TÌM BẤT ĐỘNG SẢN</h3>
  </div>
  <div class="search-box">
    <div class="row no-gutters">
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-input left-icon">
          <input type="text" placeholder="Tên căn hộ" name="title">
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="rld-single-select">
          <select class="select single-select" name="from_price">
            <option value="">Giá tối thiểu</option>
            <option value="300">~ $300</option>
            <option value="350">$ 350</option>
            <option value="400">$ 400</option>
            <option value="450">$ 450</option>
            <option value="500">$ 500</option>
            <option value="550">$ 550</option>
            <option value="600">$ 600</option>
            <option value="650">$ 650</option>
            <option value="700">$ 700</option>
            <option value="750">$ 750</option>
            <option value="800">$ 800</option>
            <option value="850">$ 850</option>
            <option value="900">$ 900</option>
            <option value="950">$ 950</option>
            <option value="1000">$ 1000</option>
            <option value="1100">$ 1100</option>
            <option value="1200">$ 1200</option>
            <option value="1300">$ 1300</option>
            <option value="1400">$ 1400</option>
            <option value="1500">$ 1500</option>
            <option value="1600">$ 1600</option>
            <option value="1700">$ 1700</option>
            <option value="1800">$ 1800</option>
            <option value="1900">$ 1900</option>
            <option value="2000">$ 2000</option>
            <option value="2100">$ 2100</option>
            <option value="2200">$ 2200</option>
            <option value="2300">$ 2300</option>
            <option value="2400">$ 2400</option>
            <option value="2500">$ 2500</option>
            <option value="2600">$ 2600</option>
            <option value="2700">$ 2700</option>
            <option value="2800">$ 2800</option>
            <option value="2900">$ 2900</option>
            <option value="3000">$ 3000</option>
            <option value="3500">$ 3500</option>
            <option value="4000">$ 4000</option>
            <option value="3500">$ 3500</option>
            <option value="4000">$ 4000</option>
            <option value="4500">$ 4500</option>
            <option value="5000">$ 5000</option>
            <option value="6000">$ 6000</option>
            <option value="7000">$ 7000</option>
            <option value="8000">$ 8000</option>
            <option value="9000">$ 9000</option>
            <option value="10000">$ 10000</option>
          </select>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="rld-single-select">
          <select class="select single-select" name="to_price">
            <option value="">Giá tối đa</option>
            <option value="300">~ $300</option>
            <option value="350">$ 350</option>
            <option value="400">$ 400</option>
            <option value="450">$ 450</option>
            <option value="500">$ 500</option>
            <option value="550">$ 550</option>
            <option value="600">$ 600</option>
            <option value="650">$ 650</option>
            <option value="700">$ 700</option>
            <option value="750">$ 750</option>
            <option value="800">$ 800</option>
            <option value="850">$ 850</option>
            <option value="900">$ 900</option>
            <option value="950">$ 950</option>
            <option value="1000">$ 1000</option>
            <option value="1100">$ 1100</option>
            <option value="1200">$ 1200</option>
            <option value="1300">$ 1300</option>
            <option value="1400">$ 1400</option>
            <option value="1500">$ 1500</option>
            <option value="1600">$ 1600</option>
            <option value="1700">$ 1700</option>
            <option value="1800">$ 1800</option>
            <option value="1900">$ 1900</option>
            <option value="2000">$ 2000</option>
            <option value="2100">$ 2100</option>
            <option value="2200">$ 2200</option>
            <option value="2300">$ 2300</option>
            <option value="2400">$ 2400</option>
            <option value="2500">$ 2500</option>
            <option value="2600">$ 2600</option>
            <option value="2700">$ 2700</option>
            <option value="2800">$ 2800</option>
            <option value="2900">$ 2900</option>
            <option value="3000">$ 3000</option>
            <option value="3500">$ 3500</option>
            <option value="4000">$ 4000</option>
            <option value="3500">$ 3500</option>
            <option value="4000">$ 4000</option>
            <option value="4500">$ 4500</option>
            <option value="5000">$ 5000</option>
            <option value="6000">$ 6000</option>
            <option value="7000">$ 7000</option>
            <option value="8000">$ 8000</option>
            <option value="9000">$ 9000</option>
            <option value="10000">$ 10000</option>
          </select>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="rld-single-select">
          <select class="select single-select" name="from_area">
            <option value="">DT tối thiểu</option>
            <option value="20">~20 m<sup>2</sup></option>
            <option value="25 ">25 m<sup>2</sup></option>
            <option value="30 ">30 m<sup>2</sup></option>
            <option value="35 ">35 m<sup>2</sup></option>
            <option value="40 ">40 m<sup>2</sup></option>
            <option value="45 ">45 m<sup>2</sup></option>
            <option value="50 ">50 m<sup>2</sup></option>
            <option value="55 ">55 m<sup>2</sup></option>
            <option value="60 ">60 m<sup>2</sup></option>
            <option value="65 ">65 m<sup>2</sup></option>
            <option value="70 ">70 m<sup>2</sup></option>
            <option value="75 ">75 m<sup>2</sup></option>
            <option value="80 ">80 m<sup>2</sup></option>
            <option value="85 ">85 m<sup>2</sup></option>
            <option value="90 ">90 m<sup>2</sup></option>
            <option value="100 ">100 m<sup>2</sup></option>
            <option value="110 ">110 m<sup>2</sup></option>
            <option value="120 ">120 m<sup>2</sup></option>
            <option value="130 ">130 m<sup>2</sup></option>
            <option value="140 ">140 m<sup>2</sup></option>
            <option value="150 ">150 m<sup>2</sup></option>
            <option value="160 ">160 m<sup>2</sup></option>
            <option value="170 ">170 m<sup>2</sup></option>
            <option value="180 ">180 m<sup>2</sup></option>
            <option value="190 ">190 m<sup>2</sup></option>
            <option value="200 ">200 m<sup>2</sup></option>
            <option value="220 ">220 m<sup>2</sup></option>
            <option value="240 ">240 m<sup>2</sup></option>
            <option value="260 ">260 m<sup>2</sup></option>
            <option value="280 ">280 m<sup>2</sup></option>
            <option value="300 ">300 m<sup>2</sup></option>
            <option value="350 ">350 m<sup>2</sup></option>
            <option value="400 ">400 m<sup>2</sup></option>
            <option value="450 ">450 m<sup>2</sup></option>
            <option value="500 ">500 m<sup>2</sup></option>
            <option value="600 ">600 m<sup>2</sup></option>
            <option value="700 ">700 m<sup>2</sup></option>
            <option value="800 ">800 m<sup>2</sup></option>
            <option value="900 ">900 m<sup>2</sup></option>
            <option value="1000 ">1000 m<sup>2</sup></option>
            <option value="2000 ">2000 m<sup>2</sup></option>
            <option value="3000 ">3000 m<sup>2</sup></option>
            <option value="4000 ">4000 m<sup>2</sup></option>
            <option value="5000 ">5000 m<sup>2</sup></option>
          </select>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="rld-single-select">
          <select class="select single-select" name="to_area">
            <option value="">DT tối đa</option>
            <option value="20">~20 m<sup>2</sup></option>
            <option value="25 ">25 m<sup>2</sup></option>
            <option value="30 ">30 m<sup>2</sup></option>
            <option value="35 ">35 m<sup>2</sup></option>
            <option value="40 ">40 m<sup>2</sup></option>
            <option value="45 ">45 m<sup>2</sup></option>
            <option value="50 ">50 m<sup>2</sup></option>
            <option value="55 ">55 m<sup>2</sup></option>
            <option value="60 ">60 m<sup>2</sup></option>
            <option value="65 ">65 m<sup>2</sup></option>
            <option value="70 ">70 m<sup>2</sup></option>
            <option value="75 ">75 m<sup>2</sup></option>
            <option value="80 ">80 m<sup>2</sup></option>
            <option value="85 ">85 m<sup>2</sup></option>
            <option value="90 ">90 m<sup>2</sup></option>
            <option value="100 ">100 m<sup>2</sup></option>
            <option value="110 ">110 m<sup>2</sup></option>
            <option value="120 ">120 m<sup>2</sup></option>
            <option value="130 ">130 m<sup>2</sup></option>
            <option value="140 ">140 m<sup>2</sup></option>
            <option value="150 ">150 m<sup>2</sup></option>
            <option value="160 ">160 m<sup>2</sup></option>
            <option value="170 ">170 m<sup>2</sup></option>
            <option value="180 ">180 m<sup>2</sup></option>
            <option value="190 ">190 m<sup>2</sup></option>
            <option value="200 ">200 m<sup>2</sup></option>
            <option value="220 ">220 m<sup>2</sup></option>
            <option value="240 ">240 m<sup>2</sup></option>
            <option value="260 ">260 m<sup>2</sup></option>
            <option value="280 ">280 m<sup>2</sup></option>
            <option value="300 ">300 m<sup>2</sup></option>
            <option value="350 ">350 m<sup>2</sup></option>
            <option value="400 ">400 m<sup>2</sup></option>
            <option value="450 ">450 m<sup>2</sup></option>
            <option value="500 ">500 m<sup>2</sup></option>
            <option value="600 ">600 m<sup>2</sup></option>
            <option value="700 ">700 m<sup>2</sup></option>
            <option value="800 ">800 m<sup>2</sup></option>
            <option value="900 ">900 m<sup>2</sup></option>
            <option value="1000 ">1000 m<sup>2</sup></option>
            <option value="2000 ">2000 m<sup>2</sup></option>
            <option value="3000 ">3000 m<sup>2</sup></option>
            <option value="4000 ">4000 m<sup>2</sup></option>
            <option value="5000 ">5000 m<sup>2</sup></option>
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <select  name="bedRooms[]" multiple="multiple" class="bed-room">
            <option value="1">1 phòng ngủ</option>
            <option value="2">2 phòng ngủ</option>
            <option value="3">3 phòng ngủ</option>
            <option value="4">4 phòng ngủ</option>
            <option value="5">5 phòng ngủ</option>
            <option value="6">6 phòng ngủ</option>
            <option value="7">7 phòng ngủ</option>
            <option value="8">8 phòng ngủ</option>
            <option value="9">9 phòng ngủ</option>
            <option value="10">10 phòng ngủ</option>
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <select  name="bathRooms[]" multiple="multiple" class="bath-room">
            <option value="1">1 phòng tắm</option>
            <option value="2">2 phòng tắm</option>
            <option value="3">3 phòng tắm</option>
            <option value="4">4 phòng tắm</option>
            <option value="5">5 phòng tắm</option>
            <option value="6">6 phòng tắm</option>
            <option value="7">7 phòng tắm</option>
            <option value="8">8 phòng tắm</option>
            <option value="9">9 phòng tắm</option>
            <option value="10">10 phòng tắm</option>
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <select  name="typeProperties[]" multiple="multiple" class="type-properties">
            '.$str_select_1.'
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <select  name="locations[]" multiple="multiple" class="locations">
            '.$str_select_2.'
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <select  name="typeBath[]" multiple="multiple" class="typeBath">
            '.$str_select_3.'
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
          <select  name="exterior[]" multiple="multiple" class="type-exterior">
            '.$str_select_4.'
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="rld-single-select">
           <select  name="featureExterior[]" multiple="multiple" class="featureExterior">
            '.$str_select_5.'
          </select>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12">
        <a class="btn btn-yellow btn-search" href="#">Tìm kiếm</a>
      </div>
    </div>
  </div>
</div>
  ';
    return $str;
}
?>
