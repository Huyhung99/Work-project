<?php
/**
 * Created by PhpStorm.
 * User: hungluong
 * Date: 2/23/17
 * Time: 3:37 PM
 */
function getNodeContentLuuHaiAu($nid){
  return node_load($nid)->field_noi_dung['und'][0]['value'];
}
function node_type_arr($type){
  $arr=array();
  foreach (entity_load('node') as $item)
  {
    if($item->type==$type)
    {
      $arr[$item->nid]=$item;
    }
  }
  return $arr;
}
function node_theo_idtaxonomy($idngay)
{
  $node=node_type_arr('bai_khoa_hoc');
  $arraycan=array();
  foreach ($node as $id =>$item)
  {
    if($item->field_ngay_day['und'][0]['tid']==$idngay)
    {
      $arraycan[$id]=$item;
    }
  }
  return $arraycan;
}
?>

