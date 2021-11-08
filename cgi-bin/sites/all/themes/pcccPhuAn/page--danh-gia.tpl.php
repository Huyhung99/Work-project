<?php print render($page['content']['metatags']); ?>
<div class="container">
  <div class="pt-15percent">
    <h1 class="text-center title-h1-rating"><?php print t('Quý Khách vui lòng đánh giá mức độ hài lòng với dịch vụ đã sử dụng!') ?></h1>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </div>
</div>
