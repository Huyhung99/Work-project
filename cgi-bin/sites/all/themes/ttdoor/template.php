<?php
function getMainMenuTTdoor($page = ''){
    $mainMenu = menu_tree_all_data('main-menu');
    $str = "";


    foreach ($mainMenu as $item){
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .="<li class='nav-item main-navbar__item'>";
                $str .=l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('nav-link')
                        ),
                        'html' => true
                    )
                );
            }elseif ($item['link']['mlid']=='1352'){
                $str .='<li class="nav-item main-navbar__item dropdown megamenu">';
                $str .=l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'class' => array('nav-link dropdown-toggle'),
                            'title' => $item['link']['link_title'],
                            'data-toggle'=> 'dropdown'
                        ),
                        'html' => true,
                        'fragment' => '',
                        'external' => true
                    )
                );

            }
            else{
                $str .='<li class="nav-item main-navbar__item dropdown">';
                $str .=l($item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'class' => array('nav-link dropdown-toggle'),
                            'title' => $item['link']['link_title'],
                            'data-toggle'=> "dropdown"
                        ),
                        'html' => true,
                        'fragment' => '',
                        'external' => true
                    )
                );
            }
            // nếu có menu con
            if(count($item['below']) > 0 && $item['link']['mlid']!='1352'){
                $str .='<div class="dropdown-menu">';
                foreach($item['below'] as $subItem){
                    if($subItem['link']['hidden'] == 0)
                        $str .= l(  $subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $item['link']['link_title'],
                                        'class' => array('dropdown-item')
                                    ),
                                    'html' => true
                                )
                            );
                }
                $str .='</div>';

            }
            if (count($item['below']) > 0 && $item['link']['mlid']=='1352'){
                $str .='<div class="dropdown-menu megamenu__list">
                            <div class="row no-gutters">
                                <div class="col-lg-12 megamenu__list--content">
                                    <div class="row">';
                foreach ($item['below'] as $subItem){

                    $str .='<div class="col-md-3">';
                    if (count($subItem['below'])==0){
                        $str.='<h5 class="megamenu__list--title">'.l($subItem['link']['link_title'],$subItem['link']['link_path']).'</h5>';
                    }else
                    $str.='<h5 class="megamenu__list--title">'.$subItem['link']['link_title'].'</h5>';
                    foreach ($subItem['below'] as $megaItem){
                        if(count($subItem['below']) > 0){
                            $str.=l($megaItem['link']['link_title'],
                                $megaItem['link']['link_path'],
                                array(
                                    'attributes'=>array(
                                        'title' => $megaItem['link']['link_title'],
                                        'class'=> array('dropdown-item')
                                    ),
                                    'html' => true
                                ));
                        }

                    }
                    $str.='</div>';

                }
                $str .='</div></div></div></div>';

            }
            $str .='</li>';
        }
    }
    return '<ul class="navbar-nav main-navbar">'.$str.'</ul>';
}


function ttdoor_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function ttdoor_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{

   if ($form['#id'] =='views-exposed-form-taxonomy-term-page-search-product'){
       $form['submit']['#attributes']['class'] = array('d-none');
       $form['title']['#attributes']['class'] = array('form-control');
       $form['title']['#attributes']['placeholder'] = t('Tìm kiếm...');
       $form['#info']['filter-title']['label'] = t('');
   }
}

/**
 * Implements hook_form_alter().
 */
function ttdoor_form_webform_client_form_40_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn submit-btn');
    $form['actions']['submit']['#prefix'] = t('<div class="custom-form__btn">');
    $form['actions']['submit']['#suffix'] = t('</div>');
}
function ttdoor_form_webform_client_form_193_alter(&$form, &$form_state, $form_id)
{
    $form['actions']['submit']['#attributes']['class'] = array('btn submit-btn');
    $form['actions']['submit']['#prefix'] = t('<div class="custom-form__btn">');
    $form['actions']['submit']['#suffix'] = t('</div>');
}
?>


