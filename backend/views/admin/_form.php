<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Admin $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'username'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter 用户名...', 'maxlength'=>255]],

            'auth_key'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter 加密子串...', 'maxlength'=>32]],

            'password_hash'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter 加密密码...', 'maxlength'=>255]],

            'email'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter 邮箱...', 'maxlength'=>255]],

            'created_at'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter 创建时间...']],

            'updated_at'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter 更新时间...']],

            'status'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter 状态...']],

            'password_reset_token'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter 找回密码token...', 'maxlength'=>255]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
    ActiveForm::end(); ?>

</div>
