<?php
/* @var $this AccommodationsController */
/* @var $model Accommodations */

$this->breadcrumbs=array(
	'Accommodations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accommodations', 'url'=>array('index')),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
?>
    <!--SECTION ACCOMMODATIONS -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Create Accommodations</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Casas donde tener una buena estancia.
        </h6>
    </div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>