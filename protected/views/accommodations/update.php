<?php
/* @var $this AccommodationsController */
/* @var $model Accommodations */

$this->breadcrumbs=array(
	'Accommodations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accommodations', 'url'=>array('index')),
	array('label'=>'Create Accommodations', 'url'=>array('create')),
	array('label'=>'View Accommodations', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
?>
    <!--SECTION ACCOMMODATIONS -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Update Accommodations <?php echo $model->id; ?></h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Casas donde tener una buena estancia.
        </h6>
    </div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>