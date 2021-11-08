<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
use common\models\User;
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
            'options' => ['autocomplete' => 'off']
    ]); ?>

    <?= $form->field($model, 'hoten')->textInput(['maxlength' => true, 'autocomplete' => 'false']) ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'autocomplete' => 'false']) ?>
    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true, 'type' => 'password', 'autocomplete' => 'new-password']) ?>
    <?= $form->field($model, 'dien_thoai')->textInput()->label('Điện thoại') ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'dia_chi')->textarea()->label('Địa chỉ'); ?>
    <?= $form->field($model, 'VIP')->dropDownList([0 => 'Non VIP', 1 => 'VIP']) ?>

    <div class="form-group">
        <?=Html::label('Vai trò');?>
        <?=Html::checkboxList('Vaitrouser[]', $vaitros, \yii\helpers\ArrayHelper::map(
                \backend\models\VaiTro::find()->all(), 'id', 'name'
        ), ['prompt' => '', 'class' => 'list-block'])?>
    </div>
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>

</div>
