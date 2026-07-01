<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "university".
 *
 * @property int $id
 * @property string $uni_name
 * @property string $location
 *
 * @property Interns[] $interns
 */
class University extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'university';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uni_name', 'location'], 'required'],
            [['uni_name', 'location'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uni_name' => 'Uni Name',
            'location' => 'Location',
        ];
    }

    /**
     * Gets query for [[Interns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInterns()
    {
        return $this->hasMany(Interns::class, ['university_id' => 'id']);
    }

}
