<!--[title]{{}}[uid]{{}}[created]{{}}[field_trang_thai]-->
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <td width="1%">STT</td>
            <td width="35%">Tiêu đề</td>
            <td width="5%">Người đăng</td>
            <td width="5%">Ngày đăng</td>
            <td width="6%">Trạng thái</td>
            <td width="5%">Thao tác</td>
            <td width="10%">Thao tác</td>
        </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    <?php foreach ($rows as $row):
        $arr = explode('{{}}',$row);
        $title = trim($arr[0]);
        $user = user_load($arr[1]);
        $created = trim($arr[2]);
        $trang_thai = trim($arr[3]);
        $nid = trim($arr[4]);
    ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$title?></td>
            <td><?=$user->name?></td>
            <td><?=$created?></td>
            <td><?=$trang_thai?></td>

            <td>
                <a href="#" class="brower btn btn-success" data-value="<?=$nid?>">Duyệt</a>
            </td>
            <td>
                <a href="#" class="un-brower btn btn-danger" data-value="<?=$nid?>">Không duyệt</a>
            </td>
        </tr>
        <?php $i++;?>
    <?php endforeach;?>
    </tbody>
</table>
