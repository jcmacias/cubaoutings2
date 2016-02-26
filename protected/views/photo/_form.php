<?php
/* @var $this PhotoController */
/* @var $model Photo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'photo-form',
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

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('class'=>'photo_name form-control')); ?>
            <?php echo $form->error($model,'name',array('class'=>'label label-danger')); ?>
        </div>

        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'principal'); ?>
            <?php echo $form->dropDownList($model,'principal',$model->getTypePicture(),array('class'=>'principal form-control')); ?>
            <?php echo $form->error($model,'principal',array('class'=>'label label-danger')); ?>
        </div>
    </div>
        <div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'tours_id'); ?>
            <?php // echo $form->dropDownList($model,'tours_id',CHtml::ListData(Tours::model()->findAll(),'id','name'),array('class'=>'photo_tours_id form-control','id'=>'combo1')); ?>
            <?php echo $form->dropDownList($model,'tours_id',CHtml::ListData(Tours::model()->findAll(),'id','name'),array(

                'class'=>'photo_tours_id form-control',
                'id'=>'combo1',
                'prompt'=>'Seleccionar',
                    'ajax'=>array(
                        'type'=>'POST',
                        'url'=>Yii::app()->createUrl('photo/placescombo'),
                        'update'=>'#'.CHtml::activeId($model,'place_id')
                    )

            )); ?>
            <?php echo $form->error($model,'tours_id',array('class'=>'label label-danger')); ?>
        </div>

        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'place_id'); ?>
            <?php echo $form->dropDownList($model,'place_id',array(),array('class'=>'photo_place_id form-control')); ?>
            <?php echo $form->error($model,'place_id',array('class'=>'label label-danger')); ?>
        </div>

        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'direction'); ?><br>
            <div class="fileUpload btn btn-warning" style="margin-top:0px;margin-left:0px;">
                <span>Upload</span>
                <?php echo $form->fileField($model,'direction',array('class'=>'upload form-control')); ?>
            </div>

            <?php echo $form->error($model,'direction',array('class'=>'label label-danger')); ?>
        </div>
    </div>

	<div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'photo_description form-control')); ?>
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

    <div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description_fr'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'photo_description form-control')); ?>
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

    <div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description_es'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'photo_description form-control')); ?>
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

    <div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description_it'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'photo_description form-control')); ?>
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

    <div class="row">
        <div class="col-lg-12">
            <?php echo $form->labelEx($model,'description_ru'); ?>
            <?php //echo $form->textArea($model,'description',array('class'=>'photo_description form-control')); ?>
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
        <div class="col-lg-12" style="margin-top: 8px;">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-right')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php Yii::app()->clientScript->registerScript('dropdowns', "

");
?>