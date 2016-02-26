<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Offers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Offer', 'url'=>array('index')),
	array('label'=>'Create Offer', 'url'=>array('create')),
	array('label'=>'View Offer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>
    <div class="container"  id="trabajos">
        <hr class="featurette-divider">
        <!-- SECTION WORKS -->
        <div class="section-header" >

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Update Offer <?php echo $model->id; ?></h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>

            </h6>
        </div>

    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>