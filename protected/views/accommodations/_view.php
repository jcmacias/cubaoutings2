<?php
/* @var $this AccommodationsController */
/* @var $data Accommodations */
?>

<div class="col-lg-4 pull-left">
    <a data-toggle="modal" data-target="#myModal<?php echo str_replace('.','_',$data->photo)?>"><div class="thumbnail">
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$data->photo, "accommodation",array("style"=>"height: 180px; width: 100%;",'class'=>'img-rounded'));?>
        </div></a>
</div>

<div class="modal fade" id="myModal<?php echo str_replace('.','_',$data->photo)?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$data->photo,"accommodation",array('class'=>'img-rounded img-responsive'));?>
<!--                <div class="details"><p>--><?php //echo $data->description;?><!--</p></div>-->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->