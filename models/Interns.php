<?php

namespace app\models;

use Yii;
use app\models\University;

/**
 * This is the model class for table "interns".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string|null $created_on
 * @property int $university_id
 *
 * @property University $university
 */
class Interns extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'interns';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'university_id'], 'required'],
            [['first_name', 'last_name', 'email'], 'string'],
            [['created_on'], 'safe'],
            [['university_id'], 'default', 'value' => null],
            [['university_id'], 'integer'],
            [['university_id'], 'exist', 'skipOnError' => true, 'targetClass' => University::class, 'targetAttribute' => ['university_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'created_on' => 'Created On',
            'university_id' => 'University ID',
        ];
    }

    /**
     * Gets query for [[University]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUniversity()
    {
        return $this->hasOne(University::class, ['id' => 'university_id']);
    }

}
