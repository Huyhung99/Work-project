<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 5/23/18
 * Time: 05:24
 */

function form_lien_ket_website($form, &$form_state){
  $table = '<table class="table table-bordered text-nowrap">
  <thead>
    <tr>
        <th width="1%"><a href="#" class="text-primary btn-them-lien-ket" data-value="0"><i class="fas fa-plus"></i> Thêm liên kết</a></th>
        <th></th>
        <th width="1%"><a href="#" class="text-danger btn-delete-node"><i class="fas fa-times"></i> Xóa</a></th>
    </tr>
  </thead>
<tbody>

</tbody>
</table>';
//  variable_set('htmlTable', $table);
  $form['tree_website'] = array(
    '#prefix' => '<div id="table-tree-website" class="table-responsive">'.(variable_get('htmlTable', $table)),
    '#suffix' => '</div><p><a href="#" class="btn btn-primary btn-save-website-link-tree"><i class="fas fa-sd-card"></i> Lưu lại</a></p><div id="block-demo-tree"></div>',
  );
  return $form;
}
