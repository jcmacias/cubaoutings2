<?php
/* @var $this OfferController */
/* @var $model Offer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'offer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'message'); ?>
            <?php echo $form->textField($model,'message',array('class'=>'message form-control')); ?>
            <?php echo $form->error($model,'message',array('class'=>'label label-danger')); ?>
        </div>

        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'imagen'); ?><br>
            <div class="fileUpload btn btn-warning" style="margin-top:0px;margin-left:0px;">
                <span>Upload</span>
                <?php echo $form->fileField($model,'imagen',array('class'=>'upload form-control')); ?>
            </div>
            <?php echo $form->error($model,'imagen',array('class'=>'label label-danger')); ?>
        </div>
	</div>
    <div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'message_fr'); ?>
            <?php echo $form->textField($model,'message_fr',array('class'=>'message form-control')); ?>
            <?php echo $form->error($model,'message_fr',array('class'=>'label label-danger')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'message_es'); ?>
            <?php echo $form->textField($model,'message_es',array('class'=>'message form-control')); ?>
            <?php echo $form->error($model,'message_es',array('class'=>'label label-danger')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'message_it'); ?>
            <?php echo $form->textField($model,'message_it',array('class'=>'message form-control')); ?>
            <?php echo $form->error($model,'message_it',array('class'=>'label label-danger')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'message_ru'); ?>
            <?php echo $form->textField($model,'message_ru',array('class'=>'message form-control')); ?>
            <?php echo $form->error($model,'message_ru',array('class'=>'label label-danger')); ?>
        </div>
    </div>
	<div class="row buttons">
        <div class="col-lg-8 "style="margin-top: 8px;">
		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-left')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->