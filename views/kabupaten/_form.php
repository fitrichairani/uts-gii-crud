<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Kabupaten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kabupaten-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?php
        $dataPost=ArrayHelper::map(\app\models\Provinsi::find()->asArray()->all(), 'id', 'nama_provinsi');
        echo $form->field($model, 'id_provinsi')
        ->dropDownList(
            $dataPost,           
            ['id'=>'nama_provinsi']
        );

    ?>

    <?= $form->field($model, 'nama_kabupaten')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
