<?php
/**
 * @var $data []
 */
?>
<h4 class="height-full align-items-center d-flex mt-30 mb-0"><strong>Xuất excel table</strong></h4>
<div class="du_lieu_sau_khi_them">
    <table class="table table-bordered table-striped text-nowrap table_bep">
        <tbody>
        <?php foreach ($data as $index => $item): ?>
            <?php print $item?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="#" class="btn btn-success xuat_ex">Xuất excel</a>
