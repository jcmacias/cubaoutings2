<?php
/* @var $this PlaceController */
/* @var $model Place */

$this->breadcrumbs=array(
	'Places'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Place', 'url'=>array('index')),
	array('label'=>'Create Place', 'url'=>array('create')),
	array('label'=>'View Place', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Place', 'url'=>array('admin')),
);
?>
    <!--SECTION PLACES -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Update Place <?php echo $model->id; ?></h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Actualizar datos.
        </h6>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>