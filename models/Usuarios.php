<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $telefone
 * @property string $celular
 * @property string $foto
 * @property string $data_nascimento
 * @property string $estado_civil
 * @property int $status
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'data_nascimento'], 'required'],
            [['data_nascimento'], 'safe'],
            [['estado_civil'], 'string'],
            [['status'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 130],
            [['telefone', 'celular'], 'string', 'max' => 15],
            [['foto'], 'string', 'max' => 100],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
            'email' => Yii::t('app', 'E-mail'),
            'telefone' => Yii::t('app', 'Telefone'),
            'celular' => Yii::t('app', 'Celular'),
            'foto' => Yii::t('app', 'Foto'),
            'data_nascimento' => Yii::t('app', 'Data de Nascimento'),
            'estado_civil' => Yii::t('app', 'Estado Civil'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\query\UsuariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\UsuariosQuery(get_called_class());
    }
}
