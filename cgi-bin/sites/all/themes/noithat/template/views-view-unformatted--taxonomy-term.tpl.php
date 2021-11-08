<!--[field_ma_san_pham]{{}}[title]{{}}[path]{{}}[field_image]-->
<div class="list-product grid">
  <?php foreach ($rows as $row):?>
    <?php $row=explode('{{}}',$row);?>
    <div class="item-product  cate-432 style-1 color-3 brand-2"><a
        href="<?=$row[2]?>" class="link-load">
        <div class="pic-product">
          <div class="highlight"></div>
          <div class="pic-img"><img
              src="<?=$row[3]?>"
              alt="<?=$row[1]?>"></div>
        </div>
      </a>
    </div>
  <?php endforeach;?>
</div>
<div class="result-filter"><?=t('Không tìm thấy sản phẩm')?></div>
