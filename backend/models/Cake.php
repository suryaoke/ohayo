<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cake".
 *
 * @property int $id
 * @property string $nama
 * @property string $harga
 * @property string $gambar
 * @property string $stok
 * @property string $status
 */
class Cake extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cake';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'harga', 'gambar', 'stok', 'status'], 'required'],
            [['nama', 'harga', 'gambar', 'stok', 'status'], 'string', 'max' => 200],
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
            'harga' => 'Harga',
            'gambar' => 'Gambar',
            'stok' => 'Stok',
            'status' => 'Status',
        ];
    }
}
