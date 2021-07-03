<?php

namespace app\models;

use Yii;
use app\models\Jurusan;
use app\models\Prodii;


/**
 * This is the model class for table "prodii".
 *
 * @property int $id
 * @property int $id_jurusan
 * @property string $prodi
 * @property string $keterangan
 *
 * @property Mahasiswaa[] $mahasiswaas
 * @property Jurusan $jurusan
 */
class Prodii extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodii';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jurusan', 'prodi', 'keterangan'], 'required'],
            [['id_jurusan'], 'integer'],
            [['prodi', 'keterangan'], 'string', 'max' => 50],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id_jurusan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_jurusan' => 'Id Jurusan',
            'prodi' => 'Prodi',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Mahasiswaas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaas()
    {
        return $this->hasMany(Mahasiswaa::className(), ['id_prodi' => 'id']);
    }

    /**
     * Gets query for [[Jurusan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(), ['id_jurusan' => 'id_jurusan']);
    }

    public static function getProdiList($jurusanID, $dependent = false){
        $subCategory = self::find()
            ->where(['id_jurusan' => $jurusanID]);
            
        if ($dependent == "") {
            return $subCategory->select(['id', 'prodi as name'])->asArray()->all();
        }else {
            return $subCategory->select(['prodi'])->indexBy('id')->column();
        }
    }
}
