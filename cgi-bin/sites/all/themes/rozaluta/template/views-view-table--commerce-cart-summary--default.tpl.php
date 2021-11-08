<div class="cart-page-top table-responsive">
  <table class="table table-hover">
    <thead>
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <td class="cart-form-heading">
          <?php print $label; ?>
        </td>
      <?php endforeach; ?>
    </tr>
    </thead>
    <tbody id="quantity-holder">
    <?php foreach ($rows as $row_count => $row): ?>
      <tr>
        <?php foreach ($row as $field => $content): ?>
          <td>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
