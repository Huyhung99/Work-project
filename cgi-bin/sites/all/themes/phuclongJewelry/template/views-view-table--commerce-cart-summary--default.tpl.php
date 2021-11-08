<div class="table-responsive w3-padding w3-white notranslate">
  <table class="table table-striped table-bordered">
    <?php $a=array(0=>'5',1=>'20',2=>'20',3=>'10',4=>'20');?>
    <thead class="thead-table">
    <tr>
      <?php $chay=0;?>
      <th width="<?= $a[$chay]?>%" >
        STT
      </th>
      <?php $chay++;?>
      <?php foreach ($header as $field => $label): ?>
        <th  width="<?= $a[$chay]?>%" scope="col">
          <?php print $label; ?>
        </th>
        <?php $chay++;?>
      <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php $chay=1;?>
    <?php foreach ($rows as $row_count => $row): ?>
      <tr class="item">
        <td><?= $chay?></td>
        <?php $chay++;?>
        <?php foreach ($row as $field => $content): ?>
          <td class="detailtd"<?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
