<?php

namespace app\models;

use Yii;
use app\models\Prodii;
use app\models\Jurusan;
/**
 * This is the model class for table "mahasiswaa".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $tanggal_lahir
 * @property string $jekel
 * @property int $id_jurusan
 * @property int $id_prodi
 * @property string $email
 * @property string $alamat
 *
 * @property Jurusan $jurusan
 * @property Prodii $prodi
 */
class Mahasiswaa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswaa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'tanggal_lahir', 'jekel', 'id_jurusan', 'id_prodi', 'email', 'alamat'], 'required'],
            [['id_jurusan', 'id_prodi'], 'integer'],
            [['nim'], 'string', 'max' => 20],
            [['nama', 'tanggal_lahir', 'email'], 'string', 'max' => 50],
            [['jekel'], 'string', 'max' => 1],
            [['alamat'], 'string', 'max' => 100],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id_jurusan']],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodii::className(), 'targetAttribute' => ['id_prodi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jekel' => 'Jekel',
            'id_jurusan' => 'Id Jurusan',
            'id_prodi' => 'Id Prodi',
            'email' => 'Email',
            'alamat' => 'Alamat',
        ];
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

    /**
     * Gets query for [[Prodi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodii::className(), ['id' => '
id_prodi']);
    }

}
