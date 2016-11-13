<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "members_file".
 *
 * @property integer $id
 * @property integer $member_id
 * @property string $path
 * @property string $type
 */
class MembersFile extends \yii\db\ActiveRecord
{
    const TYPE_INVITE = 'invite';
    const TYPE_CERTIFICATE = 'certificate';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'members_file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id'], 'integer'],
            [['type'], 'string'],
            [['path'], 'string', 'max' => 250],
            [['member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::className(), 'targetAttribute' => ['member_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'path' => 'Путь к файлу',
            'type' => 'Тип',
        ];
    }

    public function getMember()
    {
        return $this->hasOne(Member::class, ['id' => 'member_id']);
    }

    public function delete()
    {
        if (file_exists($this->getAbsolutePath())) {
            unlink($this->getAbsolutePath());
        }
        return parent::delete();
    }

    public function getAbsolutePath()
    {
        return Yii::getAlias($this->path);
    }


}
