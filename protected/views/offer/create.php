<?php
/* @var $this OfferController */
/* @var $model Offer */

$this->breadcrumbs=array(
	'Offers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Offer', 'url'=>array('index')),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>
    <div class="container"  id="trabajos">
        <hr class="featurette-divider">
        <!-- SECTION WORKS -->
        <div class="section-header" >

            <!-- SECTION TITLE -->
            <h2 class="dark-text">Create Offers</h2>

            <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
            <h6>
                Create new specials offers.
            </h6>
        </div>

    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>