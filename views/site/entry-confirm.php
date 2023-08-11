<?php 

use yii\helpers\Html;

?>

<p>You have entered the following information:</p>

<ul>
    <li><?= Html::encode($model->name) ?></li>
    <li><?= Html::encode($model->email) ?></li>
</ul>