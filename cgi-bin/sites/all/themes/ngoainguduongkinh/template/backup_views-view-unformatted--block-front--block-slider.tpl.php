<?php
/** 11/28/2019 9:38 PM**/
/** Admin **/
/** drupal-7.65 **/
?>
<section id="home" class="divider">
  <div class="container-fluid p-0">
    <!-- START REVOLUTION SLIDER 5.0.7 -->
    <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
      <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
      <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
        <ul>
          <?php foreach ($rows as $id => $row): ?>
            <?php $arr = explode('{}', $row);  ?>
            <li data-index="rs-<?=$id?>" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?=trim($arr[0])?>" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="<?=$arr[2]?>">
              <!-- MAIN IMAGE -->
              <?=str_replace('<img src', '<img data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" data-no-retina src', $arr[1])?>
              <!-- LAYERS -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                   id="slide-<?=$id?>-layer-1"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                   data-width="full"
                   data-height="full"
                   data-whitespace="normal"
                   data-transform_idle="o:1;"
                   data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                   data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                   data-start="1000"
                   data-basealign="slide"
                   data-responsive_offset="on"
                   style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);">
              </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                   id="slide-<?=$id?>-layer-2"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['200','195','160','150']"
                   data-fontsize="['60','50','40','35']"
                   data-lineheight="['80','75','70','45']"
                   data-fontweight="['500','500','500','500']"
                   data-textalign="['center','center','center','center']"
                   data-width="['800','650','600','420']"
                   data-height="none"
                   data-whitespace="normal"
                   data-transform_idle="o:1;"
                   data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                   data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                   data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                   data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                   data-start="1000"
                   data-splitin="none"
                   data-splitout="none"
                   data-responsive_offset="on"
                   style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><?=$arr[2];?>
              </div>
              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                   id="slide-<?=$id?>-layer-3"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['290','260','220','220']"
                   data-fontsize="['16','16',16',16']"
                   data-lineheight="['24','24','24','24']"
                   data-fontweight="['400','400','400','400']"
                   data-textalign="['center','center','center','center']"
                   data-width="['800','650','600','460']"
                   data-height="none"
                   data-whitespace="nowrap"
                   data-transform_idle="o:1;"
                   data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                   data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                   data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                   data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                   data-start="700"
                   data-splitin="none"
                   data-splitout="none"
                   data-responsive_offset="on"
                   style="z-index: 5; white-space: nowrap;"><?=isset($arr[3]) ? wordwrap($arr[3], 100,"<br/>") : ""?>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
      </div>
    </div>
  </div>
</section>
