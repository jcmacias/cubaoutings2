<?php
/* @var $this PlaceController */
/* @var $data Place */
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $data->name;?></h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-3">
                        <?php
                        $photos=Photo::model()->getPhotosPlace($data->id);
                        if($photos){
                            echo CHtml::image(Yii::app()->baseUrl . '/images/'.$photos[0]->direction, 'alt 1',
                                array('class'=>'img-rounded','style'=>'max-height:120px'));
                        }

                        ?>
                    </div>
                    <div class="col-lg-9">
                        <div class="message">
                            <?php echo $data->description;?>
                        </div>
                    </div>
                </div>

                <div class="row tour-name">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <p class="pull-right"><?php echo CHtml::link($data->toursp->name,Yii::app()->createUrl('tours/view',array('id'=>$data->tours_id)))?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
<!--<div class="view">-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('name')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->name); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('description')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->description); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('tours_id')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->tours_id); ?>
<!--	<br />-->
<!---->
<!---->
<!--</div>-->