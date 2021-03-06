<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MahasiswaaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswaa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mahasiswaa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'nama',
            'tanggal_lahir',
            'jekel',
            'id_jurusan',
            'jurusan.kode_jurusan',
            'jurusan.nama_jurusan',
            'id_prodi',
           // 'prodi.prodi',
           // 'prodi.keterangan',
            'email:email',
            'alamat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
