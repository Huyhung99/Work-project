<?php
/**
 ** hungd
 ** 6/27/2020 8:08 AM
 ** views-view-unformatted--block-front--block-slider.tpl.php
 ** drupal-7.65
 */
?>
<!--Main Slider-->
<section class="main-slider">
  <div class="rev_slider_wrapper container"  id="rev_slider_one_wrapper" data-source="gallery">
    <div class="rev_slider container" id="rev_slider_one" data-version="5.4.1">
      <ul>
        <?php foreach ($rows as $id => $row): ?>
          <?php
            $arr = explode('{{}}', $row);
            $field_image = trim($arr[0]);
            $field_image_1 = trim($arr[1]);
            $field_caption = trim($arr[2]);
            $field_mo_ta_slider = trim($arr[3]);
          ?>
          <li data-description="<?=$field_caption?>" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-<?=$id?>" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="<?=$field_image_1?>" data-title="<?=$field_caption?>" data-transition="parallaxvertical">
            <img alt="<?=$field_caption?>" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?=$field_image_1?>">

            <div class="tp-caption"
                 data-paddingbottom="[0,0,0,0]"
                 data-paddingleft="[0,0,0,0]"
                 data-paddingright="[0,0,0,0]"
                 data-paddingtop="[0,0,0,0]"
                 data-responsive_offset="on"
                 data-type="text"
                 data-height="none"
                 data-width="['750','750','700','420']"
                 data-fontsize="['35','35','25','16']"
                 data-whitespace="normal"
                 data-hoffset="['150','15','15','15']"
                 data-voffset="['50','80','100','30']"
                 data-x="['left','left','left','left']"
                 data-y="['top','top','top','top']"
                 data-textalign="['top','top','top','top']"
                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            >
              <h2><?=$field_caption?></h2>
            </div>

            <div class="tp-caption"
                 data-paddingbottom="[0,0,0,0]"
                 data-paddingleft="[0,0,0,0]"
                 data-paddingright="[0,0,0,0]"
                 data-paddingtop="[0,0,0,0]"
                 data-responsive_offset="on"
                 data-type="text"
                 data-height="none"
                 data-width="['550','500','450','420']"
                 data-whitespace="normal"
                 data-fontsize="['35','35','25','16']"
                 data-hoffset="['150','15','15','15']"
                 data-voffset="['150','40','25','150']"
                 data-x="['left','left','left','left']"
                 data-y="['top','middle','middle','top']"
                 data-textalign="['top','top','top','top']"
                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
            >
              <div class="text white-text"><?=$field_mo_ta_slider?></div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
<!--End Main Slider-->
