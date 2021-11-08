<?php
use yii\helpers\Html;
/**
 * Created by PhpStorm.
 * User: HungLuongHien
 * Date: 14/01/2019
 * Time: 22:12
 *
 **/
use common\models\myAPI;
?>
<ul class="nav navbar-nav">
    <li>
        <?=Html::a('<i class="fa fa-exchange"></i> Tỷ giá '.(number_format(\backend\models\Cauhinh::findOne(['ghi_chu' => 'exchange'])->content * 1000, 0, '', '.')), '#')?>
    </li>
</ul>
