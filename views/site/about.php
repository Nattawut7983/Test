<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'User';

?>

<style>
        /* ซ่อน spinner ที่ปรากฎใน input type="number" */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>
<body>
    <form class="container">
        
        <input class="textbox" type="text" placeholder="Username">
        <input class="textbox" type="number" pattern="[0-9]*" placeholder="Tell">
        <input class="btn-Submit" type="login" placeholder="login">
    </form>




</body>



