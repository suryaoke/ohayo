<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $id
 * @property string $bulan
 * @property string $jumlah
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bulan', 'jumlah'], 'required'],
            [['bulan', 'jumlah'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bulan' => 'Bulan',
            'jumlah' => 'Jumlah',
        ];
    }
}
