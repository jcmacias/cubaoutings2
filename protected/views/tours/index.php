<?php
/* @var $this ToursController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tours',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
    array('label'=>'Create Tours', 'url'=>array('create')),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
}else{
    $this->menu=array(
        array('label'=>Yii::t('app','Havana day tour'),'url'=>array('view','id'=>8)),
        array('label'=>Yii::t('app','Trinidad & Cienfuegos '),'url'=>array('view','id'=>11)),
        array('label'=>Yii::t('app','Matanzas, Cárdenas, & Varadero'),'url'=>array('view','id'=>7)),
        array('label'=>Yii::t('app','Havana & Tropicana '),'url'=>array('view','id'=>14)),
        array('label'=>Yii::t('app','Three cities tour'),'url'=>array('view','id'=>13)),
        array('label'=>Yii::t('app','Guama and the Bay of Pigs'),'url'=>array('view','id'=>12)),
        array('label'=>Yii::t('app','Havana and the cannon shot'),'url'=>array('view','id'=>15)),
        array('label'=>Yii::t('app','Transfers'),'url'=>array('transfer')),
    );
}
?>

<!--SECTION TOURS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text"><?php echo Yii::t('app','Tours'); ?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        <?php echo Yii::t('app','Just tell us your choices and we will do the rest.');?>
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
