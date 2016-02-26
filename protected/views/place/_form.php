<?php
/* @var $this PlaceController */
/* @var $model Place */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'place-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

<!--	--><?php //echo $form->errorSummary($model); ?>

	<div class="row">
        <div class="col-lg-6">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('class'=>'place_name form-control')); ?>
            <?php echo $form->error($model,'name',array('class'=>'label label-danger')); ?>
        </div>
        <div class="col-lg-6">
            <?php echo $form->labelEx($model,'tours_id'); ?>
            <?php echo $form->dropDownList($model,'tours_id',CHtml::ListData(Tours::model()->findAll(),'id','name'),array('class'=>'photo_tours_id form-control')); ?>
            <?php echo $form->error($model,'tours_id',array('class'=>'label label-danger')); ?>
        </div>
    </div>

	<div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'place_description form-control')); ?>
            <?php $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'description',
                'config' => array(
                    'toolbar'=>array(
                        array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
                        array('Link', 'Unlink', 'Anchor' ) ,
                    ),
                ),
            )); ?>
            <?php echo $form->error($model,'description',array('class'=>'label label-danger')); ?>
        </div>
	</div>

	<div class="row buttons">
        <div class="col-lg-12" style="margin-top: 8px;">
		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-right')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->