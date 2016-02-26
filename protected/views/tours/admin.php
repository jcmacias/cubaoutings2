<?php
/* @var $this ToursController */
/* @var $model Tours */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tours', 'url'=>array('index')),
	array('label'=>'Create Tours', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tours-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<!--SECTION LOGIN -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Manage Tours</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Solo para Administradores o editores.
    </h6>
</div>


<!--<p>-->
<!--You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>-->
<!--or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.-->
<!--</p>-->
<!---->
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
<!--</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tours-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		//'time_create',
		'time_update',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
