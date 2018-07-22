<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property integer $name
 * @property string $pw
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pw'], 'required'],
            [['pw'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => '主键',
            'pw' => '密码',
        ];
    }
}
