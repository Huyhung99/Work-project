<div class="site-footer__widget footer-links footer2">
  <h5 class="footer-links__title">Danh mục sản phẩm</h5>
  <ul class="footer-links__list">
    <?php foreach ($rows as $id => $row): ?>
      <li class="footer-links__item">
        <?php print $row; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
