<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "np_llj".
 *
 * @property integer $mid
 * @property string $name
 * @property integer $age
 * @property integer $who
 */
class NpLlj extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'np_llj';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid', 'name', 'who'], 'required'],
            [['mid', 'age', 'who'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mid' => '主键',
            'name' => '姓名',
            'age' => 'Age',
            'who' => 'Who',
        ];
    }
}
