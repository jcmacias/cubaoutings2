<?php
/* @var $this BookAccommodationsController */
/* @var $model BookAccommodations */
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
		<?php echo $form->label($model,'email_owner'); ?>
		<?php echo $form->textField($model,'email_owner',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pax'); ?>
		<?php echo $form->textField($model,'pax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_create'); ?>
		<?php echo $form->textField($model,'time_create'); ?>
	</div>

	<div class="row">
<!--		--><?php //echo $form->label($model,'accommodations_id'); ?>
<!--		--><?php //echo $form->textField($model,'accommodations_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->