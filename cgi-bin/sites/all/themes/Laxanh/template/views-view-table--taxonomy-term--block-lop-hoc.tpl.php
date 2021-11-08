<div class="cart-page-top table-responsive">
  <div class="thongbao-bang"></div>
  <form id="table-danhsachhocsinh">
    <table class="table table-hover">
      <?php if (!empty($header)) : ?>
        <thead>
        <tr>
          <th style="width: 1%">STT</th>
          <?php $dem=1;?>
          <?php foreach ($header as $field => $label): ?>
            <th <?php count($header)==$dem ? print 'style= "width: 10%"' : print ''?>>
              <?php  $dem++;?>
              <?php print $label; ?>
            </th>
          <?php endforeach; ?>
        </tr>
        </thead>
      <?php endif; ?>
      <tbody>
      <?php foreach ($rows as $row_count => $row): ?>
        <tr>
          <?= '<td class="text-center">'.($row_count+1).'</td>';?>
          <?php foreach ($row as $field => $content): ?>
            <td>
              <?php print $content; ?>
            </td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </form>
</div>
