<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'View Comment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>
    <!--SECTION COMMENTS -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Update Comment <?php echo $model->id; ?></h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Actualizar Testimonio..
        </h6>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>