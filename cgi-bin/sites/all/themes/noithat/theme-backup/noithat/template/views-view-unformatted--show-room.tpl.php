<?php foreach ($rows as $row):?>
<!--[title]{{}}[field_email]{{}}[field_fax]{{}}[field_hotline]{{}}[field_link_google_map]{{}}[field_thoi_gian]{{}}[field_dia_chi]{{}}[field_image]-->
<?php $row=explode('{{}}',$row);?>
<div class="wrap-info">
  <div class="company-info white ani-item">
    <h3><?php print $row[0]?></h3>
    <ul class="grey">
      <li class="add ani-item"><p><?php print $row[6]?></p></li>
      <li class="phone ani-item"><a href="tel:<?php print str_replace(' ','',$row[3])?>"><?php print $row[3]?></a></li>
      <li class="fax ani-item"><a href="tel:<?php echo str_replace(' ','',str_replace('(','',str_replace(')','',$row[2])))?>"><?php echo $row[2]?></a></li>
      <li class="email ani-item"><a href="mailto:<?php print $row[1]?>"><?php print $row[1]?></a></li>
      <li class="time ani-item"><p><?php print $row[5]?></p></li>
    </ul>
    <a class="link-map ani-item" href="https://goo.gl/maps/xvHCPFRLqdgmMfLQA" target="_blank"><?php echo t('View google maps')?></a></div>
  <div class="pic-distribution">
    <div class="pic-img"><?php print $row[7]?></div>
  </div>
</div>
<?php endforeach;?>
