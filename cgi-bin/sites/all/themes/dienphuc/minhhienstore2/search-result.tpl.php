<?php $nid= $variables['result']['node']->nid;?>
<?php dsm($variables)?>
<?php $du_lieu_node_hoc_sinh=(node_load($nid))?>
<?php if(isset($du_lieu_node_hoc_sinh->field__nh['und']) || isset($du_lieu_node_hoc_sinh->field_image['und'][0]['uri']) || isset($du_lieu_node_hoc_sinh->field_image['vi'][0]['uri'])):?>
  <div class="col-md-3 col-6">
    <div class="single-product-wrap-edit mt-10">
      <div class="product-image">
        <a title="title_field" href="<?php print check_plain(url('node/'.$du_lieu_node_hoc_sinh->nid, array()))?>">
          <?php if(isset($du_lieu_node_hoc_sinh->field__nh['und'])):?>
            <img title="<?=$du_lieu_node_hoc_sinh->title?>" alt="<?=$du_lieu_node_hoc_sinh->title?>" src="<?=image_style_url('580_x_580', $du_lieu_node_hoc_sinh->field__nh['und'][0]['uri']);?>">
          <?php else:?>
            <?php if(isset($du_lieu_node_hoc_sinh->field_image['und'][0]['uri'])):?>
              <img title="<?=$du_lieu_node_hoc_sinh->title?>" alt="<?=$du_lieu_node_hoc_sinh->title?>" src="<?=image_style_url('580_x_580', $du_lieu_node_hoc_sinh->field_image['und'][0]['uri']);?>">
            <?php else:?>
              <?php if(isset($du_lieu_node_hoc_sinh->field_image['vi'][0]['uri'])):?>
                <img title="<?=$du_lieu_node_hoc_sinh->title?>" alt="<?=$du_lieu_node_hoc_sinh->title?>" src="<?=image_style_url('580_x_580', $du_lieu_node_hoc_sinh->field_image['vi'][0]['uri']);?>">
              <?php endif;?>
            <?php endif;?>
          <?php endif;?>
        </a>
      </div>
      <div class="product-content">
        <h6 class="product-name"><a href="<?=check_plain(url('node/'.$du_lieu_node_hoc_sinh->nid, array()))?>"><?=$du_lieu_node_hoc_sinh->title?></a></h6>
      </div>
    </div>
  </div>
<?php endif;?>
