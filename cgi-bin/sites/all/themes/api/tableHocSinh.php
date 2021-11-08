<?php
/**
 * @var $data []
 */
?>
<h4 class="height-full align-items-center d-flex mt-30 mb-0"><strong>DANH SÁCH HỌC SINH ĐÃ LƯU THÀNH CÔNG</strong></h4>
<div class="du_lieu_sau_khi_them">
    <table class="table table-bordered table-striped text-nowrap">
        <thead>
        <tr>
            <th width="1%">STT</th>
            <th width="1%">Họ tên</th>
          <th width="1%">Giới tính</th>
            <th width="1%">Ngày sinh</th>
            <th width="1%">Tên bố</th>
          <th width="1%">Tên mẹ</th>
          <th width="1%">Địa chỉ</th>
          <th width="1%">Số Điện thoại</th>
          <th width="1%">Tên lớp</th>
          <th width="1%">Năm</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $index => $item): ?>
            <?php print $item?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

