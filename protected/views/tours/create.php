<?php
/* @var $this ToursController */
/* @var $model Tours */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tours', 'url'=>array('index')),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
?>
    <!--SECTION CREATE TOUR -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Create tour</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Agregue nuevas excurciones u destinos.
        </h6>
    </div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>
