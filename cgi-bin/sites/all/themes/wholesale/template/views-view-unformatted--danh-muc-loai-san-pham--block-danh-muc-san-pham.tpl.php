<nav class="categories menu">
  <ul class="clearfix">
    <li>
      <span>
        <a href="#">
          <span class="hamburger hamburger--spin">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </span>
          <?php print t('DANH MỤC SẢN PHẨM'); ?>
        </a>
      </span>
      <div id="menu">
        <ul>
          <?php foreach ($rows as $id => $row): ?>
            <li>
                <?php print $row; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </li>
  </ul>
</nav>
