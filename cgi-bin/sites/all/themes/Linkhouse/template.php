<?php
function get_main_menu(){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";
    foreach ($mainMenu as $item){
//        dpm($item);
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .='<li>';
                $str .=l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array(
                            )
                        )
                    )
                );
            }else{
                $str .='<li class="dropdown">';
                $str .=l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array(
                                'dropdown-link'
                            )
                        ),

                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<ul class="dropdown-menu clearfix">';
                foreach($item['below'] as $subItem){
                    if($subItem['link']['hidden'] == 0)
                        $str .="<li >".l($subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $subItem['link']['link_title']
                                    )
                                )
                            )."</li>";
                }
                $str .='</ul>';
            }
            $str .='</li>';
        }
    }
    return $str;
}
function Linkhouse_form_webform_client_form_79_alter(&$form, &$form_state, $form_id){
  $abc=arg(1);
  if(isset($abc) && $abc==170)
  {
    $form['#prefix']='<section id="get-quote" class="contact_form_page get-quote-section position-relative">
    <div class="get-quote-content">
      <div class="section-title title-center text-center position-relative headline">
        <h2>Để lại thông tin của bạn</h2>
      </div>
      <div class="get-quote-form">
      ';
    $form['#suffix']='</div>
      </div>
      </section>';
    $form['actions']['submit']['#prefix'] = t('<div class="text-center mt-25">');
    $form['actions']['submit']['#suffix'] = t('</div>');
  }
  else
  {
    $form['submitted']['ho_ten']['#theme_wrappers'] = array();
    $form['submitted']['so_dien_thoai']['#theme_wrappers'] = array();
    $form['submitted']['email']['#theme_wrappers'] = array();
    $form['submitted']['dia_chi']['#theme_wrappers'] = array();
    $form['submitted']['ghi_chu']['#theme_wrappers'] = array();
    $form['submitted']['ho_ten']['#prefix'] =  t('<div class="border_top_left"></div><div class="d-flex flex-wap-er nws-button  text-capitalize">');
    $form['submitted']['so_dien_thoai']['#prefix'] =  t('');
    $form['submitted']['so_dien_thoai']['#suffix'] =  t('</div>');
    $form['submitted']['email']['#prefix'] =  t('<div class="d-flex flex-wap-er nws-button  text-capitalize">');
    $form['submitted']['email']['#suffix'] =  t('');
    $form['submitted']['dia_chi']['#suffix'] =  t('</div>');
    $form['submitted']['ghi_chu']['#prefix'] =  t('<div class="nws-button  text-capitalize">');
    $form['submitted']['ghi_chu']['#suffix'] =  t('</div></div>');
    $form['actions']['submit']['#prefix'] = t('<div class="text-center mt-25">');
    $form['actions']['submit']['#suffix'] = t('</div>');
  }
}
function chuyenmuc($name_chuyen_muc)
{
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      if(trim($item['link']['link_title'])=='Tủ Bếp Nhập Khẩu')
      {
        if(count($item['below']) > 0){
          $str .='<ul>';
          foreach($item['below'] as $subItem){
            if($subItem['link']['hidden'] == 0)
              $link_get=l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $subItem['link']['link_title']
                  )
                )
              );
              $link_get=str_replace('">','"><i class="fa fa-angle-double-right pr-15"></i>',$link_get);
              $str .='<li>'.$link_get."</li>";
          }
          $str .='</ul>';
        }
      }
    }
  }
  $str_edit='<div class="single_widget headline mb-30">
	              <h3 class="widget_title mb-10">
									<span class="title_shape_left"></span>
									'.$name_chuyen_muc.'
								</h3>
                <div class="wicat_item ul-li-block">
                '.$str.'
                </div>
							</div>';
  return $str_edit;
}
