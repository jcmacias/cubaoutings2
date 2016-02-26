<?php
/* @var $this PlaceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Places',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Place', 'url'=>array('create')),
	array('label'=>'Manage Place', 'url'=>array('admin')),
);
}else{
    $this->menu=array(
        array('label'=>'Havana day tour','url'=>array('tours/view','id'=>8)),
        array('label'=>'Trinidad & Cienfuegos','url'=>array('tours/view','id'=>11)),
        array('label'=>'Matanzas, Cárdenas, & Varadero','url'=>array('tours/view','id'=>7)),
        array('label'=>'Havana & Tropicana ','url'=>array('tours/view','id'=>14)),
        array('label'=>'Three cities tour','url'=>array('tours/view','id'=>13)),
        array('label'=>'Guama & the Bay of Pigs ','url'=>array('tours/view','id'=>12)),
        array('label'=>'Havana & the cannon shot','url'=>array('tours/view','id'=>15)),
        array('label'=>'Transfers','url'=>array('tours/transfer')),

    );
}
?>
<!--SECTION PLACES -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text"><?php echo Yii::t('app','Places')?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Lista de lugares interesantes.
    </h6>
</div>

<ul role="tablist" class="nav nav-tabs" id="myTab">
    <?php
    $arrayTours=Tours::model()->GetAllTours();

    for($i=0;$i<count($arrayTours);$i++){
        if($i==0){
            ?>
            <li class="active"><a data-toggle="tab" role="tab" href="#<?php echo $arrayTours[$i]->id;?>"><?php echo $arrayTours[$i]->name;?></a></li>
        <?php
        }else{?>
            <li class=""><a data-toggle="tab" role="tab" href="#<?php echo $arrayTours[$i]->id;?>"><?php echo $arrayTours[$i]->name;?></a></li>
        <?php
        }
    }
    ?>


</ul>
<div id="myTabContent" class="tab-content">
    <?php
    for($i=0;$i<count($arrayTours);$i++){
        $dataProviderPlacesTours=Place::model()->getPlacesToursData($arrayTours[$i]->id);
        if($i==0){
            ?>
            <div class="tab-pane fade active in" id="<?php echo $arrayTours[$i]->id;?>">
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProviderPlacesTours,
                    'itemView'=>'_view',
                    'template'=>'{summary}{items} {pager}',
                    'pagerCssClass'=>'CLinkPager pull-right',
                    'pager'=>array(
                        'header' => '',
                        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
                    ),
                )); ?></div>
        <?php
        }else{?>
            <div class="tab-pane fade" id="<?php echo $arrayTours[$i]->id;?>">
                <?php  $dataProviderPlacesTours=Place::model()->getPlacesToursData($arrayTours[$i]->id);
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProviderPlacesTours,
                    'itemView'=>'_view',
                    'template'=>'{summary}{items} {pager}',
                    'pagerCssClass'=>'CLinkPager pull-right',
                    'pager'=>array(
                        'header' => '',
                        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
                    ),
                )); ?>
            </div>

        <?php
        }
    }
    ?>
</div>
<?php
Yii::app()->clientScript->registerScript('tab', "
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
");
?>
<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//    //'summaryText'=>"",
//    'template'=>'{summary}{items} {pager}',
//    //'enablePagination'=>true,
//    'pagerCssClass'=>'CLinkPager pull-right',
//    'pager'=>array(
//        'header' => '',
//        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
//    ),
//)); ?>
