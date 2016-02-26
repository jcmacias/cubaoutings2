<?php
/* @var $this AccommodationsController */
/* @var $model Accommodations */

$this->breadcrumbs=array(
	'Accommodations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Accommodations', 'url'=>array('index')),
	array('label'=>'Create Accommodations', 'url'=>array('create')),
	array('label'=>'Update Accommodations', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Accommodations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
?>
<!--SECTION ACCOMMODATIONS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">View Accommodations #<?php echo $model->id; ?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Casas donde tener una buena estancia.
    </h6>
</div>

<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Well done!</strong> You successfully add a new accommodations.
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'photo',
		'description',
        'name',
        'toursac.name'
	),
    'htmlOptions'=>array(
        'class'=>'table table-striped table-hover '
    )
)); ?>
