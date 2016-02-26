<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Photos'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Photo', 'url'=>array('index')),
	array('label'=>'Create Photo', 'url'=>array('create')),
	array('label'=>'View Photo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
?>
    <!--SECTION PHOTOS -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Update Photo <?php echo $model->id; ?></h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Actualizar informacion de la foto.
        </h6>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>