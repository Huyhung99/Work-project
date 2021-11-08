<?php
function getMenuDungCuong(){
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
                $str .= '<li>';
                $str .= l(
                    $item['link']['link_title']."<i class='fa fa-chevron-down'></i>",
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
    return '<ul class="nav navbar-nav">' . $str . '</ul>';
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function dungcuong_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-search'){
        $form['submit']['#attributes']['class'] = array('d-none');

        $form['#prefix'] = t('<div class="search-bx">');
        $form['#suffix'] = t('</div>');

        $form['title']['#theme_wrappers'] = array();
        $form['title']['#attributes']['class'] = array('form-control');
        $form['title']['#prefix'] = t('<div class="input-group">');
        $form['title']['#suffix'] = t('<span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                            </span></div>');
    }
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-search-front'){
        $form['title']['#theme_wrappers'] = array();
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['title']['#attributes']['class'] = array('form-control');
        $form['title']['#suffix'] = t('<span id="quik-search-remove"><i class="fa fa-remove"></i></span>');
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm bài viết');

    }

}

/**
 * Implements hook_form_alter().
 */
function dungcuong_form_webform_client_form_1_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('site-button');
}
function dungcuong_form_webform_client_form_403_alter(&$form, &$form_state, $form_id)
{
  $form['submitted']['ho_va_ten']['#prefix']='<div class="row"><div class="col-md-4">';
  $form['submitted']['ho_va_ten']['#suffix']='</div>';
  $form['submitted']['dien_thoai']['#prefix']='<div class="col-md-4">';
  $form['submitted']['dien_thoai']['#suffix']='</div>';
  $form['submitted']['email']['#prefix']='<div class="col-md-4">';
  $form['submitted']['email']['#suffix']='</div></div>';
}

function menu_footer(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str='';
  foreach ($mainMenu as $item)
  {
    if($item['link']['link_path']=='')
    {
      $item['link']['link_path']=='/';
    }
    $str=$str.'<li><a href="'.$item['link']['link_path'].'">'.$item['link']['title'].'</a></li>';
  }
  $str = '<div class="widget widget_services">
  <h2 class="m-b0">Liên kết</h2>
  <div class="dez-separator bg-primary"></div>
      <ul>
      '.$str.'
      </ul>
  </div>';
  return $str;
}
