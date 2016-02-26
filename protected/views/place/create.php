<?php
/* @var $this PlaceController */
/* @var $model Place */

$this->breadcrumbs=array(
	'Places'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Place', 'url'=>array('index')),
	array('label'=>'Manage Place', 'url'=>array('admin')),
);
?>
<!--SECTION PLACES -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Create Place</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Insertar nuevos sitios.
        </h6>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>