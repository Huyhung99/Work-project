<?php
/**
 ** hungd
 ** 6/27/2020 7:07 AM
 ** template.php
 ** drupal-7.65
 */
function getMainMenuDLThueMB()
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
          )
        );
      } else {
        $str .= '<li class=" dropdown">';
        $str .= l(
          $item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'external' => true,
            'fragment' => ''
          )
        );
      }

      // nếu có menu con
      if (count($item['below']) > 0) {
        $str .= '<ul>';
        foreach ($item['below'] as $subItem) {
          if ($subItem['link']['hidden'] == 0)
            $str .= "<li>" . l(
                $subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  )
                )
              ) . "</li>";
        }
        $str .= '</ul>';
      }
      $str .= '</li>';
    }
  }

  return '<ul class="navigation clearfix">' . $str . '</ul>';
}
?>

