<?php
?>
<div class="row">
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="gried-view">
            <?php foreach ($rows as $id => $row): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <?php print $row; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
