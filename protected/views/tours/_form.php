<?php
/* @var $this ToursController */
/* @var $model Tours */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tours-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
        <div class="col-lg-6">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('class'=>'tour-name form-control')); ?>
            <?php echo $form->error($model,'name',array('class'=>'label label-danger')); ?>
        </div>
        <div class="col-lg-6">
            <?php echo $form->labelEx($model,'preview'); ?>
            <?php echo $form->textArea($model,'preview',array('class'=>'preview-name form-control','maxlength' => 150)); ?>
            <?php echo $form->error($model,'preview',array('class'=>'label label-danger')); ?>
        </div>
	</div>

	<div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'tour-description form-control')); ?>
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
    <hr class="featurette-divider">
    <h2>French Translations</h2>

    <div class="row">
        <div class="col-lg-6">
            <?php echo $form->labelEx($model,'preview_fr'); ?>
            <?php echo $form->textArea($model,'preview_fr',array('class'=>'preview-name form-control','maxlength' => 150)); ?>
            <?php echo $form->error($model,'preview_fr',array('class'=>'label label-danger')); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description_fr'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'tour-description form-control')); ?>
            <?php $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'description_fr',
                'config' => array(
                    'toolbar'=>array(
                        array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
                        array('Link', 'Unlink', 'Anchor' ) ,
                    ),
                ),
            )); ?>
            <?php echo $form->error($model,'description_fr',array('class'=>'label label-danger')); ?>
        </div>

    </div>
    <hr class="featurette-divider">
    <h2>Spanish Translations</h2>

    <div class="row">
        <div class="col-lg-6">
            <?php echo $form->labelEx($model,'preview_es'); ?>
            <?php echo $form->textArea($model,'preview_es',array('class'=>'preview-name form-control','maxlength' => 150)); ?>
            <?php echo $form->error($model,'preview_es',array('class'=>'label label-danger')); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description_es'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'tour-description form-control')); ?>
            <?php $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'description_es',
                'config' => array(
                    'toolbar'=>array(
                        array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
                        array('Link', 'Unlink', 'Anchor' ) ,
                    ),
                ),
            )); ?>
            <?php echo $form->error($model,'description_es',array('class'=>'label label-danger')); ?>
        </div>

    </div>
    <hr class="featurette-divider">
    <h2>Italian Translations</h2>

    <div class="row">
        <div class="col-lg-6">
            <?php echo $form->labelEx($model,'preview_it'); ?>
            <?php echo $form->textArea($model,'preview_it',array('class'=>'preview-name form-control','maxlength' => 150)); ?>
            <?php echo $form->error($model,'preview_it',array('class'=>'label label-danger')); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description_it'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'tour-description form-control')); ?>
            <?php $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'description_it',
                'config' => array(
                    'toolbar'=>array(
                        array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
                        array('Link', 'Unlink', 'Anchor' ) ,
                    ),
                ),
            )); ?>
            <?php echo $form->error($model,'description_it',array('class'=>'label label-danger')); ?>
        </div>

    </div>
    <hr class="featurette-divider">
    <h2>Russian Translations</h2>

    <div class="row">
        <div class="col-lg-6">
            <?php echo $form->labelEx($model,'preview_ru'); ?>
            <?php echo $form->textArea($model,'preview_ru',array('class'=>'preview-name form-control','maxlength' => 150)); ?>
            <?php echo $form->error($model,'preview_ru',array('class'=>'label label-danger')); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description_ru'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'tour-description form-control')); ?>
            <?php $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'description_ru',
                'config' => array(
                    'toolbar'=>array(
                        array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
                        array('Link', 'Unlink', 'Anchor' ) ,
                    ),
                ),
            )); ?>
            <?php echo $form->error($model,'description_ru',array('class'=>'label label-danger')); ?>
        </div>

    </div>


    <div class="row buttons">
        <div class="col-lg-12" style="margin-top: 8px;">
		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-right')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->