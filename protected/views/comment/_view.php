<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-success">
<!--            <div class="panel-heading">-->
<!--                <h3 class="panel-title">--><?php //echo "Comment".' '.$data->id; ?><!--</h3>-->
<!--            </div>-->
            <div class="panel-body">
                <div class="message">
                   <?php echo '"'.$data->text.'"'?>
                </div>
                <div class="client">
                    <div class="quote yellow-text">
                        <i class="icon-comments"></i>
                    </div>
                    <div class="client-info">
                        <a href="" class="client-name"><?php echo $data->name_owner?></a>
                        <div class="client-company">
                            <?php echo  CHtml::link($data->toursc->name,Yii::app()->createUrl('tours/view',array('id'=>$data->tours_id))) ;?>
                        </div>
                    </div><?php if($data->photo_owner!=$data->name_owner."-"){?>
                    <div class="client-image hidden-xs">
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/'.$data->photo_owner, 'client',array("class"=>"img-circle","style"=>"height: 66px; width: 66px;"));?>
                    </div>
                    <?php }else{ ?>
                    <div class="client-image hidden-xs green-text" style="font-size: 4em; padding-left: 10px;">
                        <i class="icon-user"></i>
                    </div>
                    <?php }?>
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
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('name_owner')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->name_owner); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('email_owner')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->email_owner); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('photo_owner')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->photo_owner); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('text')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->text); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('likes')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->likes); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('dislike')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->dislike); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('tours_id')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->tours_id); ?>
<!--	<br />-->
<!---->
<!--</div>-->