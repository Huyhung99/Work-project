<?php
    global $language;
    if ($language->language == "vi"){
        $title_head = 'Dịch vụ';
    }else{
        $title_head = 'Services';

    }
?>
<div class="section-full p-t80 bg-gray">
    <div class="container">
        <!-- TITLE START-->
        <div class="section-head text-center">
            <h2 data-title="<?=$title_head?>"><?=$title_head?></h2>
            <div class="mt-separator-outer">
                <div class="mt-separator bg-primary"></div>
            </div>
        </div>
        <!-- TITLE END-->
        <div class="section-content">
            <div class="row">
                <div class="equal-wraper">
                    <?php foreach ($rows as $row):?>
                        <?php
                        $arr = explode('{{}}',$row);
                        $title = $arr[0];
                        $body = $arr[1];
                        $path = $arr[2];
                        $icon = $arr[3];
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="mt-icon-box-wraper  p-a30 hover-border-outer hover-border bg-white m-b30">
                                <div class="icon-md radius m-b15">
                                    <span class="icon-cell  text-primary"><?=html_entity_decode($icon)?></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="mt-tilte  m-b15"><?=$title?></h4>
                                    <p><?=$body?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>