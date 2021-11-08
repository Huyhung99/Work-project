<?php
use yii\helpers\Url;
/* @var $searchModel Backend\models\search\UserSearch */

return [
    [
        'class' => 'kartik\grid\SerialColumn',
        'header' => 'STT',
        'width' => '30px',
        'headerOptions' => ['class' => 'text-primary'],
    ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'hoten',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'dien_thoai',
        'label' => 'Điện thoại'
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'dia_chi',
        'label' => 'Địa chỉ',
        'value' => function($data){
            return wordwrap($data->dia_chi, 75, '<br/>');
        },
        'format' => 'raw'
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'username',
        'label' => 'Tên đăng nhập'
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'email',
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'vai_tro',
        'value' => function($data){
            return str_replace(',', '<br/>', $data->vai_tro);
        },
        'format' => 'raw',
        'label' => 'Vai trò',
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'VIP',
        'value' => function($data){
            return $data->VIP == 1 ? '<span class="text-success"><i class="fa fa-check-circle-o"></i> VIP</span>' : '';
        },
        'format' =>'raw',
        'headerOptions' => ['class' => 'text-center', 'width' => '3%'],
        'contentOptions' => ['class' => 'text-center'],
        'filter' => \yii\bootstrap\Html::activeDropDownList($searchModel, 'VIP', [
            0 => 'Non VIP',
            1 => 'VIP',
        ], ['prompt' => '', 'class' => 'form-control'])
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'vi_dien_tu',
        'label' => 'Ví điện tử',
        'value' => function($data){
            return number_format($data->vi_dien_tu, 3, ',','.');
        },
        'contentOptions' => ['class' => 'text-right'],
        'headerOptions' => ['class' => 'text-right', 'width' => '3%']
    ],
    [
        'header' => 'Nạp tiền',
        'value' => function($data) {
            return \yii\bootstrap\Html::a('<i class="fa fa-money"></i>', '#', ['class' => 'btn-nap-tien-vao-tai-khoan text-primary', 'data-value' => $data->id]);
        },
        'format' => 'raw',
        'headerOptions' => ['width' => '3%', 'class' => 'text-center'],
        'contentOptions' => ['class' => 'text-center']
    ],
    [
        'header' => 'Sửa',
        'value' => function($data) {
            return \yii\bootstrap\Html::a('<i class="fa fa-edit"></i>',Url::toRoute(['user/update', 'id' => $data->id]), ['role' => 'modal-remote', 'data-toggle' => 'tooltip','id'=>'select2']);
        },
        'format' => 'raw',
        'headerOptions' => ['width' => '3%', 'class' => 'text-center'],
        'contentOptions' => ['class' => 'text-center']
    ],
    [
        'header' => 'Huỷ',
        'headerOptions' => ['class' => 'text-center', 'width' => '3%'],
        'contentOptions' => ['class' => 'text-center'],
        'value' => function($data){
            if($data->hoat_dong == 1)
                return \yii\bootstrap\Html::a('<i class="fa fa-ban"></i> Huỷ', '#', ['class' => 'text-danger btn-huy-hoat-dong', 'data-value' => $data->id]);
            else
                return \yii\bootstrap\Html::a("<i class='fa fa-refresh'></i> Khôi phục", '#', ['class' => 'text-primary btn-khoi-phuc-tai-khoan', 'data-value' => $data->id]);
        },
        'format' => 'raw'
    ]

];
?>

