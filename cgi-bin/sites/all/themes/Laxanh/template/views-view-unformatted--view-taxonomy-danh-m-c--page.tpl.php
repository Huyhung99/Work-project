<?php
$arr=array() ;
$d=0;
$str='';
$ten=array();
?>
<?php foreach ($rows as $id => $row): ?>
<?php $row_new=explode('{{}}',$row);?>
 <?php
  if($str!=$row_new[1])
  {
    $str=$row_new[1];
    $ten[$d]=$row_new[1];
    $d++;
  }
  $arr[$d][$id]=strip_tags($row_new[0]);
  ?>
<?php endforeach; ?>
<div class="container-fluid">
  <?php foreach ($arr as $id => $arr_tr):?>
  <table class="table table-bordered table-striped">
    <tbody>
      <tr><?php print $ten[$id-1]?></tr>
      <tr>
        <?php foreach ($arr_tr as $arr_td):?>
          <td>
            <?php print $arr_td?>
          </td>
        <?php endforeach;?>
      </tr>
    </tbody>
  </table>
  <?php endforeach;?>
</div>
