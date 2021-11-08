<?php
function getTopMainMenu(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<li class="nav-links__item ">';
        $str .= l(
            '<div class="nav-links__item-body">'.$item['link']['link_title'].'</div>',
            $item['link']['link_path'],
            array(
              'attributes' => array(
                'title' => $item['link']['link_title'],
                'class' => array('nav-links__item-link')
              ),
              'html' => true
            )
          );
      }else
      {
        $str .='<li class="nav-links__item  nav-links__item--has-submenu ">';
        $str .=l(
          '<div class="nav-links__item-body">'.$item['link']['link_title'].' <i class="fas fa-caret-down"></i></div>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => 'nav-links__item-link'
            ),
            'html' => true,
            'fragment' => '',
            'external' => TRUE,
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<div class="nav-links__submenu nav-links__submenu--type--menu"><div class="menu menu--layout--classic "><div class="menu__submenus-container"></div><ul class="menu__list">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .='<li class="menu__item"><div class="menu__item-submenu-offset"></div>'.l(
              $subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title'],
                    'class' => array('menu__item-link')

                  )
                )
              )."</li>";
        }
        $str .='</ul></div></div>';
      }
      $str .='</li>';
    }

  }

  return '<ul class="nav-links__list">'.$str.'</ul>';
}
function getLeftMenu(){
  $mainMenu = menu_tree_all_data('menu-loai-san-pham');
    $str = "";
    foreach ($mainMenu as $item){
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .='<li class="departments__item">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('departments__item-link')
                        ),
                        'html' => true
                    )
                );
            }else
            {
                $str .='<li class="departments__item">';
                $str .=l(
                    $item['link']['link_title'].' <i class="fas fa-chevron-right"></i>',
                    '/',
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => 'departments__item-link',
                            'onclick' => 'return false;',

                        ),
                        'html' => true,
                        'fragment' => '',
                        'external' => TRUE,
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<div class="departments__submenu departments__submenu--type--menu"><div class="menu menu--layout--classic "><div class="menu__submenus-container"></div><ul class="menu__list">';
                foreach($item['below'] as $subItem){
                    if($subItem['link']['hidden'] == 0)
                        $str .='<li class="menu__item"><div class="menu__item-submenu-offset"></div>'.l(
                                $subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $item['link']['link_title'],
                                        'class' => array('menu__item-link')
                                    )
                                )
                            )."</li>";
                }
                $str .='</ul></div></div>';
            }
            $str .='</li>';
        }

    }

    return '<ul class="departments__links">'.$str.'</ul>';
}

function getMenuCategoryMobile($category){
  $str = "";
  foreach ($category as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<li class="mobile-links__item" data-collapse-item>';
        $str .= '<div class="mobile-links__item-title">'.l(
            $item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array('mobile-links__item-link')
            ),
            'html' => true
          )
        ).'</div>';
      }else
      {
        $str .=' <li class="mobile-links__item" data-collapse-item>';
        $str .= '<div class="mobile-links__item-title">'.l(
          $item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array('mobile-links__item-link'),
                'onclick' => 'return false;'
            ),
            'html' => true,
            'fragment' => '',
            'external' => TRUE,
          )
        ).' <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="/sites/default/files/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button></div>';
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<div class="mobile-links__item-sub-links" data-collapse-content><ul class="mobile-links mobile-links--level--2">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .='<li class="mobile-links__item" data-collapse-item><div class="mobile-links__item-title">'.l(
                $subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title'],
                    'class' => array('mobile-links__item-link')
                  )
                )
              ).'</div></li>';
        }
        $str .='</ul></div>';
      }
      $str .='</li>';
    }
  }

  return '<ul class="mobile-links mobile-links--level--1">'.$str.'</ul>';
}

function getMenuMobile(){
  $category = menu_tree_all_data('menu-loai-san-pham');
  $mainMenu = menu_tree_all_data('main-menu');

  $str = "";
  $i = 0;
  foreach ($mainMenu as $item){
    if($i == 1){
      $menuCategory = getMenuCategoryMobile($category);
      $str.= <<<HTML
        <li class="mobile-links__item" data-collapse-item>
          <div class="mobile-links__item-title">
            <a href="/" onclick="return false;" class="mobile-links__item-link">Danh mục sản phẩm</a>
            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
              <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="/sites/default/files/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
            </button>
          </div>
          <div class="mobile-links__item-sub-links" data-collapse-content>
            {$menuCategory}
          </div>
        </li>
HTML;
    }
    if($item['link']['hidden'] == 0){
        $i++;
        // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<li class="mobile-links__item" data-collapse-item>';
        $str .= '<div class="mobile-links__item-title">'.l(
          $item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array('mobile-links__item-link')
            ),
            'html' => true
          )
        ).'</div>';
      }else {
        $str .=' <li class="mobile-links__item" data-collapse-item>';
        $str .='<div class="mobile-links__item-title">'.l(
          $item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array( 'mobile-links__item-link'),
                'onclick' => 'return false;',
            ),
            'html' => true,
            'fragment' => '',
            'external' => TRUE,
          )
        ).'<button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="/sites/default/files/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button></div>';
      }
//       nếu có menu con
      if(count($item['below']) > 0){
        $str .='<div class="mobile-links__item-sub-links" data-collapse-content><ul class="mobile-links mobile-links--level--1">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .='<li class="mobile-links__item" data-collapse-item><div class="mobile-links__item-title">'.l(
                $subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title'],
                    'class' => array('mobile-links__item-link')
                  )
                )
              )."</div></li>";
        }
        $str .='</ul></div>';
      }
      $str .='</li>';
    }

  }

  return '<ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">'.$str.'</ul>';
}

function get_categories_sub_page_product(){
    $mainMenu = menu_tree_all_data('menu-loai-san-pham');
    $str = "";
    foreach ($mainMenu as $item){
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .='<li class="widget-categories__item" data-collapse-item><div class="widget-categories__row">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true
                    )
                );
                $str .= '</div>';
            }else
            {
                $str .='<li class="widget-categories__item" data-collapse-item><div class="widget-categories__row">';
                $str .=l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'onclick' => 'return false;',
                        ),
                        'html' => true,
                        'fragment' => ' ',
                        'external' => TRUE,
                    )
                );
                $str .= '<button class="widget-categories__expander" type="button" data-collapse-trigger></button></div>';
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<div class="widget-categories__subs" data-collapse-content><ul>';
                foreach($item['below'] as $subItem){
                    if($subItem['link']['hidden'] == 0)
                        $str .='<li>'.l(
                                $subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $subItem['link']['link_title'],
                                    )
                                )
                            )."</li>";
                }
                $str .='</ul></div>';
            }
            $str .='</li>';
        }

    }

    return '<ul class="widget-categories__list" data-collapse data-collapse-opened-class="widget-categories__item--open">'.$str.'</ul>';
}
function get_menu_sub_page_product(){
    $mainMenu = menu_tree_all_data('menu-loai-san-pham');
    $str = "";
    foreach ($mainMenu as $item){
        if($item['link']['hidden'] == 0){
            // Nếu không có menu con
            if (count($item['below']) == 0)
            {
                $str .='<li class="departments__item">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('departments__item-link')
                        ),
                        'html' => true
                    )
                );
            }else
            {
                $str .='<li class="departments__item">';
                $str .=l(
                    $item['link']['link_title'].'<svg class="menu__item-arrow" width="6px" height="9px">
                                <use xlink:href="/sites/default/files/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>',
                    '/',
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                            'class' => array('departments__item-link '),
                            'onclick' =>"return false;",
                        ),
                        'html' => true,
                        'fragment' => '',
                        'external' => TRUE,
                    )
                );
            }

            // nếu có menu con
            if(count($item['below']) > 0){
                $str .='<div class="departments__submenu departments__submenu--type--menu"><div class="menu menu--layout--classic "><div class="menu__submenus-container"></div><ul class="menu__list">';
                foreach($item['below'] as $subItem){
                    if($subItem['link']['hidden'] == 0)
                        $str .='<li class="menu__item"><div class="menu__item-submenu-offset"></div>'.l(
                                $subItem['link']['link_title'],
                                $subItem['link']['link_path'],
                                array(
                                    'attributes' => array(
                                        'title' => $subItem['link']['link_title'],
                                        'class' => array('menu__item-link ')
                                    )
                                )
                            )."</li>";
                }
                $str .='</ul></div></div>';
            }
            $str .='</li>';
        }

    }

    return '<ul class="widget-categories__list" data-collapse data-collapse-opened-class="widget-categories__item--open">'.$str.'</ul>';
}
function anhkhuong_form_comment_form_alter(&$form, &$form_state) {
    $form['actions']['submit']['#attributes']['class'] = array('btn', 'btn-primary', 'btn-lg');
    $form['actions']['preview']['#attributes']['class'] = array('d-none');
    $form['subject']['#attributes']['class'] = array('form-control');
    $form['author']['#attributes']['class'] = array('form-control');
    $form['author']['_author']['#title'] = t('Họ và tên');
    $form['author']['name']['#title'] = t('Họ và tên');
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function anhkhuong_form_views_exposed_form_alter(&$form, &$form_state, $form_id)
{
    if ($form['#id'] == 'views-exposed-form-taxonomy-term-page-tim-kiem'){
        $form['title']['#attributes']['placeholder'] = t('Tìm kiếm sản phẩm');
        $form['title']['#attributes']['class'] = array('form-control');
        $form['submit']['#attributes']['class'] = array('d-none');
        $form['#info']['filter-title']['#attributes']['placeholder'] = t('Tìm kiếm sản phẩm');
    }
    if($form['#id']=='views-exposed-form-taxonomy-term-page-search')
    {
      $form['title']['#attributes']=array('class'=>array('form-control'));
      $form['field_loai_san_pham_tid']['#attributes']=array('class'=>array('form-control'));
    }
}
function anhkhuong_preprocess_page(&$variables){
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
