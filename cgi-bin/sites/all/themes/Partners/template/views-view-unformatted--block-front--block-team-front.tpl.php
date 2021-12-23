<?php
    global $language;
    if ($language->language =='en'){
        $title = 'TEAM MEMBERS';
        $subtitle = 'MEET OUR EXPERTS';
        $body = 'Our team of experts is what makes the difference with our commitment to creating practical and effective solutions for businesses in operating and business activities.';
    }else if ($language->language == 'vi'){
        $title = 'ĐỘI NGŨ NHÂN VIÊN';
        $body = 'Đội ngũ chuyên gia của chúng tôi chính là yếu tố tạo nên sự khác biệt với cam kết tạo ra các giải pháp thực tế, hiệu quả cho doanh nghiệp trong hoạt động điều hành, kinh doanh.';
        $subtitle = 'CHUYÊN GIA CỦA CHÚNG TÔI';
    }
?>
<div class="team-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2><?=$title?></h2>
                    <p>
                        <?=$body?>
                    </p>
                </div>
            </div>
        </div>
        <div class="team-items text-center">
            <div class="row">
                <?php foreach ($rows as $row):?>
                    <?php print $row?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
