<?php
/* @var $this BookController */
/* @var $model Book */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'book-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    //'action'=>Yii::app()->createUrl('book/create'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'email_owner'); ?>
            <?php echo $form->textField($model,'email_owner',array('class'=>'book_email_owner form-control')); ?>
            <?php echo $form->error($model,'email_owner',array('class'=>'label label-danger')); ?>
        </div>
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'tours_id'); ?>
            <?php echo $form->textField($model,'tours_id',array('class'=>'tour-id form-control')); ?>
            <?php echo $form->error($model,'tours_id',array('class'=>'label label-danger')); ?>
        </div>

    </div>

	<div class="row">
        <div class="col-lg-8">
            <?php echo $form->labelEx($model,'question'); ?>
            <?php echo $form->textArea($model,'question',array('class'=>'book_question form-control')); ?>
            <?php echo $form->error($model,'question',array('class'=>'label label-danger')); ?>
        </div>
	</div>

	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'time_create'); ?>
		<?php echo $form->textField($model,'time_create'); ?>
		<?php echo $form->error($model,'time_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_update'); ?>
		<?php echo $form->textField($model,'time_update'); ?>
		<?php echo $form->error($model,'time_update');*/ ?>
	</div>-->

	<div class="row buttons">
        <div class="col-lg-8">
		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-right')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->