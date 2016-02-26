<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>
    <!--SECTION CREATE TOUR -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Create comment</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
           Formulario para comentar...
        </h6>
    </div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>