<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = '';

?>
<div class="">
    <h1><?= Html::encode($this->title) ?></h1>

    <p></p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>

<link rel="stylesheet" href="log.css">
<body>
    <form class="container">
        
        <input class="textbox" type="text" placeholder="Username">
        <input class="textbox" type="Tell" placeholder="Tell">
        <input class="btn-Submit" type="login" placeholder="login">
    </form>

</body>