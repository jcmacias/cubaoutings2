<?php
/* @var $this BookAccommodationsController */
/* @var $model BookAccommodations */

$this->breadcrumbs=array(
	'Book Accommodations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BookAccommodations', 'url'=>array('index')),
	//array('label'=>'Create BookAccommodations', 'url'=>array('create')),
	array('label'=>'View BookAccommodations', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BookAccommodations', 'url'=>array('admin')),
);
?>

<h1>Update BookAccommodations <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>