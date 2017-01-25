<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
	if(Yii::$app->session->hasFlash('success'))
	{
		echo "<div class='alert alert-succes'>Yes" .Yii::$app->session->getFlash('success')."</div>";
	}else{
		echo "<div class='alert alert-succes'>No" .Yii::$app->session->getFlash('fail')."</div>";
	}
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>

<?= Html::submitButton('Submit', ['class'=>'btn btn-success']); ?>