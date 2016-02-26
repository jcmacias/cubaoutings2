<?php
/* @var $this BookAccommodationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Book Accommodations',
);

$this->menu=array(
	//array('label'=>'Create BookAccommodations', 'url'=>array('create')),
	array('label'=>'Manage BookAccommodations', 'url'=>array('admin')),
);

?>
<!--SECTION BOOKACCOMMODATIONS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Book Accommodations</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Books accommodations list.
    </h6>
</div>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    //'summaryText'=>"",
    'template'=>'{summary}{items} {pager}',
    //'enablePagination'=>true,
    'pagerCssClass'=>'CLinkPager pull-right',
    'pager'=>array(
        'header' => '',
        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
    ),
)); ?>
