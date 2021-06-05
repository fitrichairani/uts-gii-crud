<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Divisi;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karyawan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Pilih Tanggal...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
    ]);?>

    <?= $form->field($model, 'nip')->textInput() ?>

    <?= $form->field($model, 'jekel')->radioList(array('L'=>'Laki-Laki','P'=>'Perempuan'))->label('Jenis Kelamin') ?>
    
    <?= $form->field($model, 'id_divisi')->dropDownList(ArrayHelper::map(Divisi::find()->all(),'id','divisi'), ['prompt' => 'Pilih'])->label('Divisi'); ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
