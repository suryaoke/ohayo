<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "best_selai".
 *
 * @property int $id
 * @property string $nama
 * @property string $img_url
 */
class BestSelai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'best_selai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'img_url'], 'required'],
            [['nama', 'img_url'], 'string', 'max' => 200],
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
            'img_url' => 'Img Url',
        ];
    }
}
