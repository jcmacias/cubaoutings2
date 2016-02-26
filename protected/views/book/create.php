<?php
/* @var $this BookController */
/* @var $model Book */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Book', 'url'=>array('index')),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);
?>
    <!--SECTION CONTACT -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Create Book</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Crear reservas.
        </h6>
    </div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>