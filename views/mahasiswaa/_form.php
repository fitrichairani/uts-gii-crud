<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Prodii;
use app\models\Jurusan;
use kartik\date\DatePicker;
use yii\helpers\Url;
use kartik\depdrop\DepDrop;
/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswaa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswaa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

     <?=$form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Pilih Tanggal...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
    ]);?>



   <?= $form->field($model, 'jekel')->radioList(array('L'=>'Laki-Laki','P'=>'Perempuan'))->label('Jenis Kelamin') ?>

    
    <?= $form->field($model, 'id_jurusan')->dropDownList(Jurusan::getJurusan(),
        ['id' => 'jurusan','prompt' => 'select Jurusan...'])
       ?>
        
    <?=
        $form->field($model, 'id_prodi')->widget(DepDrop::classname(),[
            'data' => Prodii::getProdiList($model->id_jurusan,$model->nim),
            'options' => ['id' => 'prodi','prompt' => 'select Jurusan...'],
            'pluginOptions' => [
                'depends' => ['jurusan'],
                'placeholder' => 'select prodi...',
                'url' => Url::to(['mahasiswa/subcat'])
            ]
        ])
    ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textArea(array('rows'=>4)) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>