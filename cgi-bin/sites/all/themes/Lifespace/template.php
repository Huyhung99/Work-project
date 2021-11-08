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
                $str .='<li class="dropdown"><i class="ti-angle-right"></i><i class="ti-angle-down"></i>';
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
                $str .='<ul class="dropdown-menu">';
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

    return '<ul class="nav navbar-nav">'.$str.'</ul>';
}?>
<?php
function Lifespace_css_alter(&$css)
{
    unset($css[drupal_get_path('module', 'system').'/system.theme.css']);
    unset($css[drupal_get_path('module','system').'/system.base.css']);
    unset($css[drupal_get_path('module', 'system').'/system.messages.css']);
    unset($css[drupal_get_path('module', 'comment').'/comment.css']);
    unset($css[drupal_get_path('module', 'field').'/theme/field.css']);
    unset($css[drupal_get_path('module', 'mollom').'/mollom.css']);
    unset($css[drupal_get_path('module', 'node').'/node.css']);
    unset($css[drupal_get_path('module', 'search').'/search.css']);
    unset($css[drupal_get_path('module', 'user').'/user.css']);
    unset($css[drupal_get_path('module', 'views').'/css/views.css']);
    unset($css[drupal_get_path('module', 'ctools').'/css/ctools.css']);
    unset($css[drupal_get_path('module', 'panels').'/css/panels.css']);
}
function Lifespace_js_alter(&$js)
{
    unset($js[drupal_get_path('module', 'panels').'/js/panels.js']);
    unset($js[drupal_get_path('module', 'views').'/js/views.js']);
    unset($js[drupal_get_path('module', 'views').'/js/ajax_view.js']);
    unset($js[drupal_get_path('module', 'views').'/js/base.js']);
}?>
