<?php
?>
<div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="webproduct-light" data-source="gallery" style="background-color:transparent;padding:0px; width: 100%; height: 50%">
    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
    <div id="rev_slider_1050_1" class="slider-dots rev_slider fullscreenbanner" data-plugin-options='{"delay": 9000, "gridwidth": 1920, "gridheight": 556, "disableProgressBar": "on"}' style="display:none;" data-version="5.4.1">

<!--        [field_image]{{}}[field_image_1]{{}}[field_image_2]{{}}[field_caption]{{}}[field_mo_ta_slider]-->
        <ul>



        <?php foreach ($rows as $id => $row):?>
            <?php $arr = explode('{{}}',$row)?>
            <li data-index="rs-<?=$id?>" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"   data-thumb="<?=$arr[0]?>"  data-rotate="0"   data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <?= str_replace('src','data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg img-responsive" data-no-retina src ',$arr[1])?>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption WebProduct-Title   tp-resizeme"
                     id="slide-<?=$id?>-layer-01"
                     data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                     data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                     data-fontsize="['57','55','55','45']"
                     data-lineheight="['65','65','65','65']"
                     data-width="['1000','300','300','300']"
                     data-height="none"
                     data-whitespace="normal"


                     data-type="text"
                     data-responsive_offset="on"

                     data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 11;
                                white-space: normal;
                                text-transform:uppercase;
	                            font-weight: 700;">
                    <div class="text-secondry"><span class="text-primary"><?=$arr[3]?></span></div>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption WebProduct-SubTitle   tp-resizeme"
                     id="slide-<?=$id?>-layer-02"
                     data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                     data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                     data-fontsize="['55','55','55','45']"
                     data-lineheight="['75','75','75','75']"
                     data-width="['800','600','300','300']"
                     data-height="none"
                     data-whitespace="normal"

                     data-type="text"
                     data-responsive_offset="on"

                     data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index: 12;
                                white-space: normal;
                                text-transform:uppercase;
                               	font-weight: 700;
                                ">
                    <div class="text-secondry">
                        <span class="text-primary"></span>
                    </div>

                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption WebProduct-Content   tp-resizeme"
                     id="slide-<?=$id?>-layer-03"
                     data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                     data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                     data-fontsize="['30','21','24','30']"
                     data-lineheight="['50','28','32','50']"
                     data-width="['800','800','600','400']"
                     data-height="['none','none','76','68']"
                     data-whitespace="normal"

                     data-type="text"
                     data-responsive_offset="on"

                     data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"
                     style="z-index: 13; white-space: normal;
                            font-weight: 500">
                    <div class="text-secondry"><?=$arr[4]?></div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme"
                     id="slide-<?=$id?>-layer-04"
                     data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                     data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="button"
                     data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-<?=$id?>","delay":""}]'
                     data-responsive_offset="on"
                     data-responsive="on"
                     data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[40,40,40,40]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"

                     style="z-index:13; text-transform:uppercase; font-weight:700;">
                </div>
                <!-- LAYER NR. 5 -->

                <div class="tp-caption tp-resizeme"
                     id="slide-<?=$id?>-layer-05"
                     data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                     data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"

                     data-type="button"
                     data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-<?=$id?>","delay":""}]'
                     data-responsive_offset="on"
                     data-responsive="on"
                     data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                     data-textAlign="['left','left','left','left']"
                     data-paddingtop="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[40,40,40,40]"

                     style="z-index:13; text-transform:uppercase; font-weight:700;">
                </div>
            </li>
        <?php endforeach;?>
        </ul>
    </div>
</div>

