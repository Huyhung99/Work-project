<?php
function getMenuMain(){
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
                $str .= '<li class="menu-item-has-children">';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true,
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
    return '<ul class="nav-menu">' . $str . '</ul>';
}
function getMenuFooter(){
    $mainMenu = menu_tree_all_data('menu-menu-footer');
    $str = "";
    foreach ($mainMenu as $item) {
        if ($item['link']['hidden'] == 0) {
            // Nếu không có menu con
            if (count($item['below']) == 0) {
                $str .= "<li>";
                $str .= l(
                    '<i class="fa fa-angle-right" aria-hidden="true"></i> '.$item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true
                    )
                );
            } else {
                $str .= '<li >';
                $str .= l(
                    $item['link']['link_title'],
                    $item['link']['link_path'],
                    array(
                        'attributes' => array(
                            'title' => $item['link']['link_title'],
                        ),
                        'html' => true,
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
    return '<ul class="sitemap-widget">' . $str . '</ul>';
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
function chuyenmuc()
{
  $danh_sach_node=node_load_multiple(array(), array('type'=>'bai_viet'));
  $str='';
  foreach ($danh_sach_node as $item)
  {
    if($item->field_chuyen_muc['und'][0]['tid']==1)
    {
      $str=$str.'<li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="'.check_plain(url('node/'.$item->nid, array())).'"> '.$item->title.'</a></li>';
    }
  }
  $str='<div class="sidebar-area"><div class="cate-box"><h3 class="title">Chương trình đào tạo</h3><ul>'.$str.'</ul></div></div>';
  return $str;
}
?>
