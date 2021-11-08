<?php if($node->field_vi_tri_ban_do['und'][0]['value']):?>
  <?php print render($content['field_vi_tri_ban_do']); ?>
<?php else:?>
  <?php print '<iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=vi&amp;q=H%E1%BA%A3i+ph%C3%B2ng&amp;z=14&amp;t=m&amp;output=embed"></iframe>'?>
<?php endif;?>
