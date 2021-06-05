<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id
 * @property string $nama
 * @property string $tgl_lahir
 * @property int $nip
 * @property string $jekel
 * @property int $id_divisi
 * @property string $alamat
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tgl_lahir', 'nip', 'jekel', 'id_divisi', 'alamat'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nip', 'id_divisi'], 'integer'],
            [['nama', 'alamat'], 'string', 'max' => 50],
            [['jekel'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'nip' => 'Nip',
            'jekel' => 'Jekel',
            'id_divisi' => 'Id Divisi',
            'alamat' => 'Alamat',
        ];
    }
}
