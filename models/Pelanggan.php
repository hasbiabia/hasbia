<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $id
 * @property string $nama_pemilik
 * @property string $nama_hewan_peliharaan
 * @property string $jenis_hewan_peliharaan
 * @property string $usia_peliharaan
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pemilik', 'nama_hewan_peliharaan', 'jenis_hewan_peliharaan', 'usia_peliharaan'], 'required'],
            [['nama_pemilik', 'nama_hewan_peliharaan', 'jenis_hewan_peliharaan', 'usia_peliharaan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pemilik' => 'Nama Pemilik',
            'nama_hewan_peliharaan' => 'Nama Hewan Peliharaan',
            'jenis_hewan_peliharaan' => 'Jenis Hewan Peliharaan',
            'usia_peliharaan' => 'Usia Peliharaan',
        ];
    }
}
