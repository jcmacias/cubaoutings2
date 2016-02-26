<?php
/* @var $this PhotoController */
/* @var $model Photo */

$this->breadcrumbs=array(
	'Photos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Photo', 'url'=>array('index')),
	array('label'=>'Create Photo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#photo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<!--SECTION PHOTOS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Manage Photos</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Administrar fotos.
    </h6>
</div>

<!--<p>-->
<!--You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>-->
<!--or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.-->
<!--</p>-->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
<!--</div><!-- search-form -->

<?php
$imagen='"/images/"';
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'photo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		//'direction',
        array(
            'type'=>'html',
            'name'=>'direction',
            'value'=>'CHtml::image(Yii::app()->baseUrl."/images/$data->direction","",array("class"=>"img-rounded","style"=>"width:100px;"))'

        ),
        array(
            'name' => 'tours.name',
         ),
        //'description',
		'time_create',
		//'time_update',
		/*
		'tours_id',
		'place_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

