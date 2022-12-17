<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "selai".
 *
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 * @property string $img_url
 */
class Selai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'selai';
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
