<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\Url;
use kartik\depdrop\DepDrop;
use yii\helpers\ArrayHelper;
use app\models\Kabupaten;


/* @var $this yii\web\View */
/* @var $model app\models\Data */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>


     <?=$form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Pilih Tanggal...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
    ]);?>


   <?= $form->field($model, 'jekel')->radioList(array('L'=>'Laki-Laki','P'=>'Perempuan'))->label('Jenis Kelamin') ?>

    <?= $form->field($model, 'id_provinsi')->dropDownList(Provinsi::getProvinsi(),
        ['id_provinsi' => 'provinsi','prompt' => 'select Provinsi...'])
       ?>

       <?=
        $form->field($model, 'id_kabupaten')->widget(DepDrop::classname(),[
            'data' => Kabupaten::getKabupatenList($model->id_kabupaten),
            'options' => ['id' => 'kabupaten','prompt' => 'select Kabupaten...'],
            'pluginOptions' => [
                'depends' => ['provinsi'],
                'placeholder' => 'select Kabupaten...',
                'url' => Url::to(['data/subcat'])
            ]
        ])
    ?>

    <?= $form->field($model, 'id_kabupaten')->textInput() ?>

    <?= $form->field($model, 'id_kecamatan')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
