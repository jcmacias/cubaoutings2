<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
    <!--SECTION USER -->
    <div class="section-header" id="contact">
        <!-- SECTION TITLE -->
        <h2 class="dark-text">Create User</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Vista para la creación de usuarios
        </h6>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>