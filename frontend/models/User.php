<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property integer $weixin_id
 * @property string $username
 * @property string $nickname
 * @property string $weixin_unionid
 * @property string $weixin_openid
 * @property string $avatar
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $mobile
 * @property string $email
 * @property integer $status
 * @property integer $level
 * @property integer $isactive
 * @property string $preference
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $invite_type
 * @property integer $invite_value
 * @property string $invite_reward
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['weixin_id', 'status', 'level', 'isactive', 'created_at', 'updated_at', 'invite_value'], 'integer'],
            [['username', 'nickname', 'weixin_unionid', 'weixin_openid', 'avatar', 'auth_key', 'password_hash', 'mobile', 'email', 'isactive', 'preference', 'created_at', 'updated_at', 'invite_type', 'invite_value', 'invite_reward'], 'required'],
            [['invite_reward'], 'number'],
            [['username', 'nickname', 'weixin_unionid', 'weixin_openid', 'avatar', 'password_hash', 'password_reset_token', 'email', 'preference'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['mobile', 'invite_type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'weixin_id' => '站点ID',
            'username' => '用户名',
            'nickname' => '昵称',
            'weixin_unionid' => '微信唯一ID',
            'weixin_openid' => '公众号识别码',
            'avatar' => '头像',
            'auth_key' => '加密子串',
            'password_hash' => '加密密码',
            'password_reset_token' => '找回密码token',
            'mobile' => '手机号',
            'email' => '邮箱',
            'status' => '状态',
            'level' => '用户等级',
            'isactive' => '是否活跃',
            'preference' => '偏好',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'invite_type' => '邀请类型',
            'invite_value' => '邀请参数',
            'invite_reward' => '邀请人的奖励',
        ];
    }
}
