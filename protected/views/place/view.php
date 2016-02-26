<?php
/* @var $this PlaceController */
/* @var $model Place */

$this->breadcrumbs=array(
	'Places'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Place', 'url'=>array('index')),
	array('label'=>'Create Place', 'url'=>array('create')),
	array('label'=>'Update Place', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Place', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Place', 'url'=>array('admin')),
);
?>
<!--SECTION PLACE -->
<div class="section-header" id="contact">
    <!-- SECTION TITLE -->
    <h2 class="dark-text">View Place #<?php echo $model->id; ?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Mantente en contacto.Dinos lo que piensas.
    </h6>
</div>

<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'tours_id',
	),
    'htmlOptions'=>array(
        'class'=>'table table-striped table-hover '
    )
)); ?>
