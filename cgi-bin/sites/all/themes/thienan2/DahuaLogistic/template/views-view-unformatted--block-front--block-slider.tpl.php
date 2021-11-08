<?php
?>
<div class="main-slider style-two default-banner">
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <!-- START REVOLUTION SLIDER 5.4.1 -->
            <div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background-color:#111111;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
<!--        [field_caption]{{}}[field_caption_1]{{}}[field_mo_ta_slider]{{}}[field_image]{{}}[field_image_1]{{}}[field_image_2]-->
                        <?php foreach ($rows as $id => $row):?>
                            <?php $arr = explode('{{}}',$row)?>
                            <li data-index="rs-<?=$id?>" data-transition="slotfade-vertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-thumb="<?=$arr[3]?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Big &amp; Bold" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->

                                <?=str_replace('src','data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina src',$arr[5])?>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  "
                                     id="slide-<?=$id?>-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="['400','400','400','550']"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="off"
                                     data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  "
                                     id="slide-<?=$id?>-layer-2"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="['400','400','400','550']"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="off"
                                     data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;">
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption BigBold-Title   tp-resizeme"
                                     id="slide-<?=$id?>-layer-3"
                                     data-x="['left','left','left','left']" data-hoffset="['50','50','30','17']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','180','180']"
                                     data-fontsize="['90','70','50','30']"
                                     data-lineheight="['100','90','60','60']"
                                     data-fontweight="['900','900','900','900']"
                                     data-width="['none','none','none','400']"
                                     data-height="none"
                                     data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                     data-type="text"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[10,10,10,10]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[10,10,10,10]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 6;
                                            text-transform:uppercase;
                                            color:#fff;
                                            font-family: 'Roboto', sans-serif;
                                            "><span class="color-red">  <?=$arr[0]?></div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption BigBold-SubTitle  "
                                     id="slide-<?=$id?>-layer-4"
                                     data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','78']"
                                     data-fontsize="['15','15','15','13']"
                                     data-lineheight="['24','24','24','20']"
                                     data-width="['410','410','410','280']"
                                     data-height="['60','100','100','100']"
                                     data-whitespace="normal"
                                     data-type="text"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="off"
                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 7;
                                            color:#fff;
                                            "><?=$arr[2]?>
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption BigBold-Button rev-btn "
                                     id="slide-<?=$id?>-layer-5"
                                     data-x="['left','left','left','left']" data-hoffset="['480','480','30','20']"
                                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['20','20','20','20']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-type="button"
                                     data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="off"
                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[15,15,15,15]"
                                     data-paddingright="[50,50,50,50]"
                                     data-paddingbottom="[15,15,15,15]"
                                     data-paddingleft="[50,50,0,0]"
                                     style="z-index: 8; "></div>
                            </li>
                        <?php endforeach;?>
                        <!-- SLIDE  -->
                        <!-- SLIDE  -->
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
</div>

