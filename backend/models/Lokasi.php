<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lokasi".
 *
 * @property int $id
 * @property string $deskripsi
 * @property string $img_url
 */
class Lokasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lokasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deskripsi', 'img_url'], 'required'],
            [['deskripsi', 'img_url'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'deskripsi' => 'Deskripsi',
            'img_url' => 'Img Url',
        ];
    }
}
