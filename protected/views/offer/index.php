<?php
/* @var $this OfferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Offers',
);

$this->menu=array(
	array('label'=>'Create Offer', 'url'=>array('create')),
	array('label'=>'Manage Offer', 'url'=>array('admin')),
);
?>

<div class="container"  id="trabajos">
    <hr class="featurette-divider">
    <!-- SECTION WORKS -->
    <div class="section-header" >

        <!-- SECTION TITLE -->
        <h2 class="dark-text"> Offers </h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>

        </h6>
    </div>

</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'template'=>'{summary}{items} {pager}',
    'pagerCssClass'=>'CLinkPager pull-right',
    'pager'=>array(
        'header' => '',
        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
    ),
)); ?>
