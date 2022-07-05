<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hobi".
 *
 * @property int $id
 * @property string $nama
 * @property string $warna_kesukaan
 * @property string $makanan_kesukaan
 * @property string $hobi
 */
class Hobi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hobi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'warna_kesukaan', 'makanan_kesukaan', 'hobi'], 'required'],
            [['nama', 'warna_kesukaan', 'makanan_kesukaan', 'hobi'], 'string', 'max' => 100],
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
            'warna_kesukaan' => 'Warna Kesukaan',
            'makanan_kesukaan' => 'Makanan Kesukaan',
            'hobi' => 'Hobi',
        ];
    }
}
