<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pesan".
 *
 * @property int $id
 * @property string $nama
 * @property string $hp
 * @property string $email
 * @property string $pesanan
 */
class Pesan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pesan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'hp', 'email', 'pesanan'], 'required'],
            [['pesanan'], 'string'],
            [['nama', 'hp', 'email'], 'string', 'max' => 200],
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
            'hp' => 'Hp',
            'email' => 'Email',
            'pesanan' => 'Pesanan',
        ];
    }
}
