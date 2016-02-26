<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>true,
    'clientOptions' => array(
        'validateOnSubmit'=>true,
        'validateOnChange'=>true,
        'validateOnType'=>false,
    ),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->

<!--	--><?php //echo $form->errorSummary($model); ?>

	<div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'name_owner'); ?>
            <?php echo $form->textField($model,'name_owner',array('class'=>'name_owner form-control')); ?>
            <?php echo $form->error($model,'name_owner',array('class'=>'label label-danger')); ?>
        </div>
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'email_owner'); ?>
            <?php echo $form->textField($model,'email_owner',array('class'=>'email_owner form-control')); ?>
            <?php echo $form->error($model,'email_owner',array('class'=>'label label-danger')); ?>
        </div>

        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'photo_owner'); ?><br>
            <div class="fileUpload btn btn-warning" style="margin-top:0px;margin-left:0px;">
             <span>Upload</span>
            <?php echo $form->fileField($model,'photo_owner',array('class'=>'upload photo_owner form-control')); ?>
            </div>
            <?php echo $form->error($model,'photo_owner',array('class'=>'label label-danger')); ?>
        </div>

    </div>
	<div class="row">
        <div class="col-lg-12">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('class'=>'text_comment form-control')); ?>
		<?php echo $form->error($model,'text',array('class'=>'label label-danger')); ?>
        </div>
	</div>

	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'likes'); ?>
		<?php echo $form->textField($model,'likes'); ?>
		<?php echo $form->error($model,'likes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dislike'); ?>
		<?php echo $form->textField($model,'dislike'); ?>
		<?php echo $form->error($model,'dislike'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_create'); ?>
		<?php echo $form->textField($model,'time_create'); ?>
		<?php echo $form->error($model,'time_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_update'); ?>
		<?php echo $form->textField($model,'time_update'); ?>
		<?php echo $form->error($model,'time_update');*/ ?>
	</div>-->

	<div class="row">
<!--        <div class="col-lg-4">-->
<!--            --><?php //echo $form->labelEx($model,'tours_id'); ?>
<!--            --><?php //echo $form->dropDownList($model,'tours_id',CHtml::listData(Tours::model()->findAll(),'id','name'),array('class'=>'tours_id form-control')); ?>
<!--            --><?php //echo $form->error($model,'tours_id'); ?>
<!--        </div>-->
        <div class="col-lg-4 pull-right" style="margin-top: 27px;">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-right')); ?>
        </div>

    </div>


<?php $this->endWidget(); ?>

</div><!-- form -->