<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Offers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Offer', 'url'=>array('index')),
	array('label'=>'Create Offer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#offer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="container"  id="trabajos">
    <hr class="featurette-divider">
    <!-- SECTION WORKS -->
    <div class="section-header" >

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Manage Offers</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>

        </h6>
    </div>

</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'offer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'message',
		'imagen',
		'create_time',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
