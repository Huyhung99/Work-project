<?php
/**
 * @var $data []
 * @var $kieu
 * @var $ten_hoi_vien
 */
?>
<div class="du_lieu_sau_khi_them">
  <?php if($kieu=='hoi_vien'):?>
    <table class="table table-bordered table-striped">
      <thead>
      <tr>
        <td width="20%">Tên công ty</td>
        <td width="20%">Địa chỉ</td>
        <td width="13%">Người đại diện</td>
        <td width="5%">Số điện thoại</td>
        <td width="5%">Số di động</td>
        <td width="8%">Email</td>
      </tr>
      </thead>
        <tbody>
        <?php foreach ($data as $index => $item): ?>
            <?php print $item?>
        <?php endforeach; ?>
        </tbody>
    </table>
  <?php else:?>
    <?php if(strlen($ten_hoi_vien)>0):?>
    <h3>Hội viên : <?=explode('{{}}',$ten_hoi_vien)[0]?></h3>
    <?php endif;?>
    <table class="table table-bordered table-striped">
      <thead>
      <tr>
        <td>Tên tàu</td>
        <td>Trọng tải</td>
        <td>Năm đóng/ hoán cải</td>
        <td>Cấp tàu</td>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($data as $index => $item): ?>
        <?php print $item?>
      <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif;?>
</div>
