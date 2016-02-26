<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 27/06/14
 * Time: 9:55
 *
 */
/* @var $this PhotoController */
/* @var $data Photo */
?>
<!--<div class="view" style="float: left;">-->
<!--<div class="col-lg-4 pull-left">-->
    <a data-toggle="modal" data-target="#myModal<?php echo str_replace('.','_',$data->direction)?>">
        <div class="thumbnail pull-left" style="margin-bottom: 0px; width:70px;">
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$data->direction, $data->name,array("style"=>"height: 50px; width: 100%;",'class'=>'img-rounded'));?>
        </div></a>
<!--</div>-->

<div class="modal fade" id="myModal<?php echo str_replace('.','_',$data->direction)?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$data->direction, $data->name,array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded img-responsive'));?>
                <div class="details"><?php
                    if(Yii::app()->getLanguage() == 'en'){
                        echo $data->description;
                    }
                    if(Yii::app()->getLanguage() == 'fr'){
                        if($data->description_fr != null)
                        {
                            echo $data->description_fr;
                        }else{
                            echo '<div class="alert alert-dismissable alert-danger">
                                     <strong>We Sorry!</strong> French translation not found for this photo.
                                    </div>';
                        }
                    }
                    if(Yii::app()->getLanguage() == 'es'){
                        if($data->description_es != null)
                        {
                            echo $data->description_es;
                        }else{
                            echo '<div class="alert alert-dismissable alert-danger">
                                    <strong>We Sorry!</strong> Spanish translation not found for this photo.
                                    </div>';
                        }
                    }
                    if(Yii::app()->getLanguage() == 'it'){
                        if($data->description_it != null)
                        {
                            echo $data->description_it;
                        }else{
                            echo '<div class="alert alert-dismissable alert-danger">
                                    <strong>We Sorry!</strong> Italian translation not found for this photo.
                                  </div>';
                        }
                    }
                    if(Yii::app()->getLanguage() == 'ru'){
                        if($data->description_ru != null)
                        {
                            echo $data->description_ru;
                        }else{
                            echo '<div class="alert alert-dismissable alert-danger">
                                    <strong>We Sorry!</strong> Russian translation not found for this photo.
                                   </div>';
                        }
                    }

                    ?></div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->