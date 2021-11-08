<div class="form-group">
     <select class="form-control" id="select-list-doanh-nghiep">
        <?php foreach ($rows as $id => $row): ?>
            <?php $arr = explode('{{}}', $row); ?>
            <option value="<?=$arr[0]?>">
                <?=$arr[1]?>
            </option>
        <?php endforeach; ?>
    </select>
</div>
