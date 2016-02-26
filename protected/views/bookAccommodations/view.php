<?php
/* @var $this BookAccommodationsController */
/* @var $model BookAccommodations */

$this->breadcrumbs=array(
	'Book Accommodations'=>array('index'),
	$model->id,
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'List BookAccommodations', 'url'=>array('index')),
	//array('label'=>'Create BookAccommodations', 'url'=>array('create')),
	array('label'=>'Update BookAccommodations', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BookAccommodations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookAccommodations', 'url'=>array('admin')),
);
}else{
    $this->menu=array(
        array('label'=>'Havana day tour','url'=>array('view','id'=>8)),
        array('label'=>'Trinidad & Cienfuegos ','url'=>array('tours/view','id'=>11)),
        array('label'=>'Matanzas, Cárdenas, & Varadero','url'=>array('tours/view','id'=>7)),
        array('label'=>'Havana and Tropicana ','url'=>array('tours/view','id'=>14)),
        array('label'=>'Three cities tour','url'=>array('tours/view','id'=>13)),
        array('label'=>'Guama and the Bay of Pigs ','url'=>array('tours/view','id'=>12)),
        array('label'=>'Havana and the cannon shot','url'=>array('tours/view','id'=>15)),
        array('label'=>'Transfers','url'=>array('tours/transfer')),

    );
}
?>
<!--SECTION BOOK -->
<div class="section-header" id="contact">
    <!-- SECTION TITLE -->
    <h2 class="dark-text">View BookAccommodations #<?php echo $model->id; ?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Booking details.
    </h6>
</div>

<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Well done!</strong>You has successfully reserved!! <a href="<?php echo Yii::app()->createUrl('accommodations/index')?>" class="alert-link">Go back.</a>.
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email_owner',
		'pax',
		'date',
		//'time_create',
		'question',
	),
)); ?>
