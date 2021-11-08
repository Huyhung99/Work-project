<div class="testimonial-video">
  <div class="title-testimonial">
    <h2 class="title-color mb-30">Những đánh giá của khách hàng</h2>
  </div>
  <div class="row">
    <?php foreach ($rows as $id => $row): ?>
      <div class="col-md-4">
        <div>
          <?php print html_entity_decode($row) ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
