<?php
/* @var $this ToursController */
/* @var $data Tours */
?>

<?php
$photos=Photo::model()->getPhotosToursPrincipal($data->id);
//echo '<pre>';
//print_r($photos);
//echo '</pre>';
//die;
?>
<div class="col-lg-4">
    <div class="thumbnail" style="height: 400px;">
        <?php if(count($photos)>0){?>
        <?php
        echo CHtml::image(Yii::app()->baseUrl . '/images/'.$photos[0]->direction,$photos[0]->name,array("style"=>"height: 180px; width: 100%;",'class'=>'img-rounded'));
        }else{
            echo "<span style='font-size: 129px;padding-left: 56px;'><i class=' icon-camera-retro'></i></span>";
        }
        ?>
        <div class="caption">
            <div class="preview" style="max-height: 150px; overflow: hidden;">
                <h4><?php echo Yii::t('app',$data->name); ?></h4>
                <p><?php
                    if(Yii::app()->getLanguage() == 'en'){
                        echo $data->preview;
                    }
                    if(Yii::app()->getLanguage() == 'fr'){
                        if($data->preview_fr != null)
                        {
                            echo $data->preview_fr;
                        }else{
                            echo '<div class="alert alert-dismissable alert-danger">
                            <strong>We Sorry!</strong> French translation not found for this tour.
                            </div>';
                        }
                    }
                    if(Yii::app()->getLanguage() == 'es'){
                        if($data->preview_es != null)
                        {
                            echo $data->preview_es;
                        }else{
                            echo '<div class="alert alert-dismissable alert-danger">
                            <strong>We Sorry!</strong> Spanish translation not found for this tour.
                            </div>';
                        }
                    }
                    if(Yii::app()->getLanguage() == 'it'){
                        if($data->preview_it != null)
                        {
                            echo $data->preview_it;
                        }else{
                            echo '<div class="alert alert-dismissable alert-danger">
                            <strong>We Sorry!</strong> Italian translation not found for this tour.
                            </div>';
                        }
                    }if(Yii::app()->getLanguage() == 'ru'){
                        if($data->preview_ru != null)
                        {
                            echo $data->preview_ru;
                        }else{
                            echo '<div class="alert alert-dismissable alert-danger">
                            <strong>We Sorry!</strong> Russian translation not found for this tour.
                            </div>';
                        }
                    }

                    ?> </p>
            </div>
            <p>
                <?php echo CHtml::link(Yii::t('app','Read More'), array('view', 'id'=>$data->id),array('class'=>"btn  btn-primary" )); ?>
            </p>
        </div>
    </div>
</div>



<!--<div class="view">

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_create')); ?>:</b>
	<?php echo CHtml::encode($data->time_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_update')); ?>:</b>
	<?php echo CHtml::encode($data->time_update); */?>
	<br />


</div>-->