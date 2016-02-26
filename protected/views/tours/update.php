<?php
/* @var $this ToursController */
/* @var $model Tours */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tours', 'url'=>array('index')),
	array('label'=>'Create Tours', 'url'=>array('create')),
	array('label'=>'View Tours', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
?>

    <!--SECTION TOURS -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Update Tour <?php echo $model->id; ?></h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Actualizar Tour..
        </h6>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>