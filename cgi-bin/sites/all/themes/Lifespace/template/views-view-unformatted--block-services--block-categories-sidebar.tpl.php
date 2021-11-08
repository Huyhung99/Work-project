
    <div class="widget">
        <div class="widget-title">
            <h6 class="text-uppercase">Danh mục dịch vụ</h6>
        </div>
        <ul>
            <?php foreach ($rows as $id => $row): ?>
                <li>
                    <?php print $row; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
