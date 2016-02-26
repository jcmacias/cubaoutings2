<?php
/* @var $this BookAccommodationsController */
/* @var $model BookAccommodations */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'book-accommodations-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email_owner'); ?>
		<?php echo $form->textField($model,'email_owner',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pax'); ?>
		<?php echo $form->textField($model,'pax'); ?>
		<?php echo $form->error($model,'pax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_create'); ?>
		<?php echo $form->textField($model,'time_create'); ?>
		<?php echo $form->error($model,'time_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accommodations_id'); ?>
		<?php echo $form->textField($model,'accommodations_id'); ?>
		<?php echo $form->error($model,'accommodations_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->