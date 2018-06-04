<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

	<?php if(\Yii::$app->session->hasFlash('success')): ?>
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <?php echo \Yii::$app->session->getFlash('success'); ?>
		</div>	
	<?php endif; ?>

	<?php if(\Yii::$app->session->hasFlash('error')): ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <?php echo \Yii::$app->session->getFlash('error'); ?>
		</div>	
	<?php endif; ?>
	<?php $form = ActiveForm::begin(['options' => ['id' => 'Product']]); ?>
	<?= $form->field($product, 'title'); ?>
	<?= $form->field($product, 'cost'); ?>
	<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']); ?>
	<?php ActiveForm::end(); ?>