<?php
$i = 0;
$quantily = count($rows);
?>

<?php if (isset($_GET['page'])):?>
  <?php if ($_GET['page'] < $quantily):?>
    <?php
    $arr= explode('{{}}',$rows[$_GET['page']]);
    $title = $arr[0];
    $field_image = $arr[1];
    $path = $arr[2];
    $price = $arr[3];
    $add_to_cart = $arr[4];
    $state_product = $arr[5];
    $nid = $arr[6];
    ?>
    <div class="product-img">
      <a href="<?= $path ?>">
        <img src="<?= $field_image ?>" class="first_img" alt="<?= trim($title) ?>" title="<?= trim($title) ?>"/>
      </a>
      <div class="new-product-action">
        <?php if ($state_product == 'Có'): ?>
          <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>
          <div class="add-to-cart d-none">
            <?= $add_to_cart ?>
          </div>
        <?php else: ?>
          <a href="/bao-gia-san-pham?id=<?= trim($nid) ?>"><span class="lnr lnr-phone-handset"></span> Liên
            hệ</a>
        <?php endif; ?>
      </div>
    </div>
    <div class="product-content text-center">
      <h3 class="pt-10"><a href="<?= $path ?>">
          <?= (trim($title)) ?>
        </a>
      </h3>
      <?php if ($state_product == 'Có'): ?>
        <div class="price">
          <h4><?= $price ?></h4>
        </div>
      <?php endif; ?>
    </div>
  <?php else: ?>
    <?php
    $arr= explode('{{}}',$rows[0]);
    $title = $arr[0];
    $field_image = $arr[1];
    $path = $arr[2];
    $price = $arr[3];
    $add_to_cart = $arr[4];
    $state_product = $arr[5];
    $nid = $arr[6];
    ?>
    <div class="product-img">
      <a href="<?= $path ?>">
        <img src="<?= $field_image ?>" class="first_img" alt="<?= trim($title) ?>" title="<?= trim($title) ?>"/>
      </a>
      <div class="new-product-action">
        <?php if ($state_product == 'Có'): ?>
          <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>
          <div class="add-to-cart d-none">
            <?= $add_to_cart ?>
          </div>
        <?php else: ?>
          <a href="/bao-gia-san-pham?id=<?= trim($nid) ?>"><span class="lnr lnr-phone-handset"></span> Liên
            hệ</a>
        <?php endif; ?>
      </div>
    </div>
    <div class="product-content text-center">
      <h3 class="pt-10"><a href="<?= $path ?>">
          <?= (trim($title)) ?>
        </a>
      </h3>
      <?php if ($state_product == 'Có'): ?>
        <div class="price">
          <h4><?= $price ?></h4>
        </div>
      <?php endif; ?>
    </div>
  <?php endif;?>
<?php else: ?>
  <?php
  $arr= explode('{{}}',$rows[0]);
  $title = $arr[0];
  $field_image = $arr[1];
  $path = $arr[2];
  $price = $arr[3];
  $add_to_cart = $arr[4];
  $state_product = $arr[5];
  $nid = $arr[6];
  ?>
  <div class="product-img">
    <a href="<?= $path ?>">
      <img src="<?= $field_image ?>" class="first_img" alt="<?= trim($title) ?>" title="<?= trim($title) ?>"/>
    </a>
    <div class="new-product-action">
      <?php if ($state_product == 'Có'): ?>
        <a href="#" class="link-add-to-cart"><span class="lnr lnr-cart"></span> Thêm vào giỏ hàng</a>
        <div class="add-to-cart d-none">
          <?= $add_to_cart ?>
        </div>
      <?php else: ?>
        <a href="/bao-gia-san-pham?id=<?= trim($nid) ?>"><span class="lnr lnr-phone-handset"></span> Liên
          hệ</a>
      <?php endif; ?>
    </div>
  </div>
  <div class="product-content text-center">
    <h3 class="pt-10"><a href="<?= $path ?>">
        <?= (trim($title)) ?>
      </a>
    </h3>
    <?php if ($state_product == 'Có'): ?>
      <div class="price">
        <h4><?= $price ?></h4>
      </div>
    <?php endif; ?>
  </div>

<?php endif;?>
