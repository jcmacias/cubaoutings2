<?php
/* @var $this BookAccommodationsController */
/* @var $model BookAccommodations */

$this->breadcrumbs=array(
	'Book Accommodations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BookAccommodations', 'url'=>array('index')),
	array('label'=>'Manage BookAccommodations', 'url'=>array('admin')),
);
?>

<h1>Create BookAccommodations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>