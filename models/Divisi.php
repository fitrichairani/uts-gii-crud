<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "divisi".
 *
 * @property int $id
 * @property string $divisi
 */
class Divisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'divisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['divisi'], 'required'],
            [['divisi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'divisi' => 'Divisi',
        ];
    }
}
