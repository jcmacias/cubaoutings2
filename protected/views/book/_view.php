<?php
/* @var $this BookController */
/* @var $data Book */
?>





<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo "Book"." "."#".$data->id;?></h3>
            </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$data,
                    'attributes'=>array(
                       // 'id',
                        'email_owner',
                        'question',
                        'time_create',
                    //    'time_update',
                        'pax',
                        'toursb.name'

                    ),
                    'htmlOptions'=>array(
                        'class'=>'table table-striped table-hover '
                    )
                )); ?>

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
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('email_owner')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->email_owner); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('question')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->question); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('time_create')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->time_create); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('time_update')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->time_update); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('tours_id')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->tours_id); ?>
<!--	<br />-->
<!---->
<!---->
<!--</div>-->