<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animales".
 *
 * @property string $codigo
 * @property string|null $nombre
 */
class Animales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'animales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo'], 'required'],
            [['codigo'], 'string', 'max' => 10],
            [['nombre'], 'string', 'max' => 30],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'nombre' => 'Nombre',
        ];
    }
}
