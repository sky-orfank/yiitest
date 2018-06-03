<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="col-lg-1 col-offset-6 centered">
	<h3>Гостевая книга</h3>

	<?php foreach ($posts as $post): ?>

	<p><b><?=$post->name .'</b>' . '<br>' . $post->text?></p>

	<?php endforeach; ?>

	<?= LinkPager::widget([
	 'pagination' => $pages,
	]); ?>

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
	<?php $form = ActiveForm::begin(['options' => ['id' => 'Guestbook']]); ?>
	<?= $form->field($model, 'name'); ?>
	<?= $form->field($model, 'email')->input('email'); ?>
	<?= $form->field($model, 'text')->textarea(); ?>
	<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']); ?>
	<?php ActiveForm::end(); ?>

</div>			
