<div class="row table-cart">
<div class=" wrap-table table-responsive w3-padding w3-white notranslate">
  <table class="cart-items">
    <?php $a=array(0=>'5',1=>'20',2=>'20',3=>'10',4=>'10',5=>'20');?>
    <thead class="top-labels">
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <th scope="col">
          <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row_count => $row): ?>
      <tr class="item">
          <td class="title text-left">
              <ul class="list-inline">
                  <li class="image">
                      <a href="#">
                          <?php print $row['field_images']?>
                      </a>
                  </li>
                  <li class="link">
                      <a href="#">
                          <span class="title-5"><?php print $row['line_item_title']?></span>
                      </a>
                  </li>
              </ul>
          </td>
          <td class="title-1">
              <?php print $row['commerce_unit_price']?>
          </td>
          <td class="quantity">
              <?php print $row['edit_quantity']?>
          </td>
          <td class="total title-1">
              <?php print $row['commerce_total']?>
          </td>
          <td class="action">
              <?php print $row['edit_delete']?>
              <button type="button" id="delete_product"><i class="fa fa-times"></i></button>
          </td>
          <td>

          </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
