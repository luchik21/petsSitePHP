<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to register:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>


        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
</div>