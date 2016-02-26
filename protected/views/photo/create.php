<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Photos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Photo', 'url'=>array('index')),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
?>
    <!--SECTION PHOTOS -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Create Photo</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Insertar nueva foto.
        </h6>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>