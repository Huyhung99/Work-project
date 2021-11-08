<!--[title]{{}}[path]{{}}[field_image]-->
<?php foreach ($rows as $row):?>
  <?php $row=explode('{{}}',$row);?>
  <div class="box-news ani-item">
    <a class="link-load" href="<?php print $row[1]?>">
      <div class="new-icon"></div>
      <div class="pic-img"><?php print $row[2]?></div>
      <div class="text-news"><h3><?php print $row[0]?></h3></div>
    </a></div>
<?php endforeach;?>
<!--<div class="box-news ani-item"><a class="link-load"-->
<!--                                  href="../truyen-thong/tin-du-an/du-an-cai-tao-biet-thu-phu-my-hung-phong-cach-y.html">-->
<!--    <div class="new-icon"></div>-->
<!--    <div class="pic-img"><img-->
<!--        src="../pictures/catalog/news/hinh-dai-cai-tao-biet-thu-phu-my-hung.jpg"-->
<!--        alt="DỰ ÁN CẢI TẠO PHÚ MỸ HƯNG THEO PHONG CÁCH Ý "></div>-->
<!--    <div class="text-news"><h3>DỰ ÁN CẢI TẠO PHÚ MỸ HƯNG THEO PHONG CÁCH Ý </h3></div>-->
<!--  </a></div>-->
<!--<div class="box-news ani-item"><a class="link-load"-->
<!--                                  href="../truyen-thong/tin-du-an/biet-thu-159-trieu-usd-mo-phong-cung-dien-Versailles.html">-->
<!--    <div class="new-icon"></div>-->
<!--    <div class="pic-img"><img src="../pictures/catalog/news/vitaly-biet-thu-dat-nhat-nuoc-my-9.jpg"-->
<!--                              alt="Biệt thự 159 triệu USD mô phỏng cung điện Versailles"></div>-->
<!--    <div class="text-news"><h3>Biệt thự 159 triệu USD mô phỏng cung điện Versailles</h3></div>-->
<!--  </a></div>-->
