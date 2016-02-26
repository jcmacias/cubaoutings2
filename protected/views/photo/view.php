<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Photos'=>array('index'),
	$model->name,
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'List Photo', 'url'=>array('index')),
	array('label'=>'Create Photo', 'url'=>array('create')),
	array('label'=>'Update Photo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Photo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
}
?>

<!--SECTION PLACE -->
<div class="section-header" id="contact">
    <!-- SECTION TITLE -->
    <h2 class="dark-text">View Photo #<?php echo $model->id; ?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Mantente en contacto.Dinos lo que piensas.
    </h6>
</div>

<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Well done!</strong> You successfully add a new photo.
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'direction',
		'description',
		'time_create',
		'time_update',
		'tours_id',
		'place_id',
	),
    'htmlOptions'=>array(
        'class'=>'table table-striped table-hover '
    )
)); ?>
