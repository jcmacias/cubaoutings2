<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_owner'); ?>
		<?php echo $form->textField($model,'name_owner',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_owner'); ?>
		<?php echo $form->textField($model,'email_owner',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_owner'); ?>
		<?php echo $form->textField($model,'photo_owner',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'likes'); ?>
		<?php echo $form->textField($model,'likes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dislike'); ?>
		<?php echo $form->textField($model,'dislike'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_create'); ?>
		<?php echo $form->textField($model,'time_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_update'); ?>
		<?php echo $form->textField($model,'time_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tours_id'); ?>
		<?php echo $form->textField($model,'tours_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->