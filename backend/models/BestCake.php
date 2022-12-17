<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "best_cake".
 *
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 * @property string $img_url
 */
class BestCake extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'best_cake';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'deskripsi', 'img_url'], 'required'],
            [['nama', 'deskripsi', 'img_url'], 'string', 'max' => 200],
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
            'deskripsi' => 'Deskripsi',
            'img_url' => 'Img Url',
        ];
    }
}
