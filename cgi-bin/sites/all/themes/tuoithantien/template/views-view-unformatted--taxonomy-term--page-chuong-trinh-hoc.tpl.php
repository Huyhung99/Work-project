<?php
$data = taxonomy_select_nodes(43);
$nodes = node_load_multiple($data) ;
$arr_item = array();
$arr_color = array('pink', 'green', 'blue', 'yellow', 'violet','light-red');
$arr_index = array();
foreach ($nodes as $item) {
  $arr_item[$item->field_v_tr_['und'][0]['value']] = array(
    'title' => $item->title,
    'path' => $item->path
  );
  $arr_index[] = $item->field_v_tr_['und'][0]['value'];
}
sort($arr_index);
//[field_image]{{}}[title]{{}}[body]{{}}[path]

?>
<div class="block-chuong-trinh-hoc">
    <div class="d-none d-sm-block">
        <div class="block-list-chuong-trinh-hoc text-center mb-40">
            <ul class="list-inline list-unstyled">
                <?php $index_color = 0; ?>
                <?php foreach ($rows as $id => $row): ?>
                <?php $arr = explode('{{}}',$row)?>
                    <li class="item-list-chuong-trinh-hoc item-<?=$arr_color[$index_color]?>">
                        <?php $title = str_replace('Phương pháp', 'Phương pháp<br/>', str_replace('Chương trình', 'Chương trình<br/>', str_replace(' Tiếng Anh ưu việt của hệ thống giáo dục Cambridge', 'Tiếng Anh Cambridge',str_replace('Chương trình Giáo dục đặc biệt cho trẻ (từ 6 đến 24 tháng tuổi)','Chương trình Chăm sóc & Giáo dục đào tạo',$arr[1]) ))) ?>
                        <a href="chuong-trinh-hoc#<?=createCode($title)?>" class="link_chuong_trinh_hoc" title="<?=$title?>"><?=$title?></a>
                        <?php $index_color++; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="block-list-detail-chuong-trinh-hoc">
            <?php $index_color = 0; ?>
            <?php foreach ($rows as $id => $row): ?>
                <?php $arr = explode('{{}}', $row); //[field_image]{{}}[title]{{}}[body]{{}}[path] ?>
                <?php if($id % 2 == 0): ?>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="img-chuong-trinh-hoc" ><?=$arr[0]?></div>
                        </div>
                        <div class="col-md-7">
                            <h3 class="text-<?=$arr_color[$index_color]?>" id="<?=createCode($arr[1])?>"><a href="<?=$arr[3]?>" title="<?=$arr[1]?>"><?=$arr[1]?></a></h3>
                            <p><?=$arr[2];?></p>
                            <p><a href="<?=trim($arr[3])?>" class="more-button more-button-<?=$arr_color[$index_color]?> d-none-mb">Xem thêm <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="text-<?=$arr_color[$index_color]?>" id="<?=createCode($arr[1])?>"><a href="<?=$arr[3]?>" title="<?=$arr[1]?>"><?=$arr[1]?></a></h3>
                            <p><?=$arr[2];?></p>
                            <p class="text-center"><a href="<?=trim($arr[3])?>" class="more-button more-button-<?=$arr_color[$index_color]?> d-none-mb">Xem thêm <i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="col-md-5">
                            <div class="img-chuong-trinh-hoc"><?=$arr[0]?></div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $index_color++ ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!--<div class="display-none-pc mb-tab-chuong-trinh-hoc">-->
<!--  <div id="accordion-question">-->
<!--    --><?php //foreach ($nodes as $index => $item): ?>
<!--      <div class="card">-->
<!--        <div class="card-header" id="heading--><?//=$index?><!--">-->
<!--          <h5 class="mb-0">-->
<!--            <button class="btn btn-link  title-question --><?php //if($index!=0) print 'collapsed'?><!--" data-toggle="collapse" data-target="#collapseOne--><?//=$index?><!--" aria-expanded="--><?php //if($index==0){print 'true';}else{print 'false';}?><!--" aria-controls="collapseOne">-->
<!--              --><?//=str_replace('Chương trình Tiếng Anh ưu việt của hệ thống giáo dục Cambridge','Chương trình Tiếng Anh Cambridge',$item->title);?><!-- <span class="plus-icon"><i class="fas fa-plus-circle"></i></span>-->
<!--              <span class="minus-icon hidden"><i class="fas fa-minus-circle"></i></span>-->
<!--            </button>-->
<!--          </h5>-->
<!--        </div>-->
<!--        <div id="collapseOne--><?//=$index?><!--" class="tab-chuong-trinh-hoc collapse --><?php //if($index==0) print 'show'?><!--" aria-labelledby="headingOne" data-parent="#accordion-question">-->
<!--          <div class="card-body">-->
<!--            <div class="row"><div class="col-12">-->
<!--                <p class="body-chu-tri-ho">-->
<!--                  --><?//=$item->body['und'][0]['value']; ?>
<!--                </p>-->
<!--                    --><?php //foreach ($rows as $id => $row): ?>
<!--                        --><?php //$arr = explode('{{}}', $row); //[field_image]{{}}[title]{{}}[body]{{}}[path] ?>
<!--                        --><?php //if($item->title == $arr[1]):?>
<!--                        <p class="text-center"><a href="--><?//=trim($arr[3])?><!--" class="btn btn-green rounded-pill">Xem thêm <i class="fas fa-chevron-right"></i></a></p>-->
<!--                        --><?php //break;
//                        endif;?>
<!--                    --><?php //endforeach;?>
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    --><?php //endforeach; ?>
<!--  </div>-->
<!--</div>-->
