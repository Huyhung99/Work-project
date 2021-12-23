<?php
foreach ($rows as $row){
    $member = getThanhVien($row);

}
?>
<div class="owner-info text-center">
    <div class="thumb">
        <img src="/sites/default/files/images.png" alt="no-image" tilte="no-image" class="img-fluid">
    </div>
    <div class="details">
        <?php if (!empty($member)):?>
        <h6><?=$member['nguoi_phu_trach']['ho_ten']?></h6>
        <?php endif;?>
        <span class="designation">

            <?php if (!empty($member)):?>
                <a href="#" class="hidden_phone_contact">03342***** Hiện số</a>
                <span class="phone-contact d-none"><a href="tel:<?=$member['nguoi_phu_trach']['dien_thoai']?>"><?=$member['nguoi_phu_trach']['dien_thoai']?></a></span>
            <?php endif;?>
        </span>
    </div>
</div>