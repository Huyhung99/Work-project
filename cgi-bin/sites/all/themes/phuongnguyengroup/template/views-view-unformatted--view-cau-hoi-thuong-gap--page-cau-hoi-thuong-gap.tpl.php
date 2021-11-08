<div id="accordion-question">
  <?php foreach ($rows as $id => $row): ?>
    <?php $arr = explode('{{}}', $row); ?>
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link <?=$id > 0 ? 'collapsed' : ''?> title-question" data-toggle="collapse" data-target="#collapseOne<?=$id?>" aria-expanded="<?=$id == 0 ? 'true' : 'false'?>" aria-controls="collapseOne">
            <?=$arr[0]?>
            <span class="plus-icon"><i class="fas fa-plus-circle"></i></span>
            <span class="minus-icon hidden"><i class="fas fa-minus-circle"></i></span>
          </button>
        </h5>
      </div>
      <div id="collapseOne<?=$id?>" class="collapse <?=$id > 0 ? '' : 'show'?>" aria-labelledby="headingOne" data-parent="#accordion-question">
        <div class="card-body">
          <?=$arr[1]?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
