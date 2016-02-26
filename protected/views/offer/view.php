<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Offers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Offer', 'url'=>array('index')),
	array('label'=>'Create Offer', 'url'=>array('create')),
	array('label'=>'Update Offer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Offer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>
<div class="container"  id="trabajos">
    <hr class="featurette-divider">
    <!-- SECTION WORKS -->
    <div class="section-header" >

        <!-- SECTION TITLE -->
        <h2 class="dark-text">View Offer #<?php echo $model->id; ?></h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>

        </h6>
    </div>

</div>
<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Well done!</strong>You has successfully insert a new offer!!.
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'message',
        'message_fr',
        'message_es',
        'message_it',
        'message_ru',
		'imagen',
		'create_time',
	),
    'htmlOptions'=>array(
        'class'=>'table table-striped table-hover '
    )
)); ?>
