<?php
/* @var $this BookController */
/* @var $model Book */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Book', 'url'=>array('index')),
	//array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'View Book', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);
?>
    <!--SECTION CONTACT -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Update Book <?php echo $model->id; ?></h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Modifique su reservacion.
        </h6>
    </div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>