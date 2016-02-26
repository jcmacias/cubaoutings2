<?php
/* @var $this BookController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Books',
);

$this->menu=array(
	//array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);
?>
<!--SECTION BOOK -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Books</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Lista de reservas.
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
