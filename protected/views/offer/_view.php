<?php
/* @var $this OfferController */
/* @var $data Offer */
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo "Especial Offers"." "."#".$data->id;?></h3>
            </div>
            <div class="panel-body">
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$data,
                    'attributes'=>array(
                        'id',
                        'message',
                        'message_fr',
                        'message_es',
                        'message_it',
                        'message_ru',
                        'imagen',
                        'create_time',
                    ),
                    'htmlOptions'=>array(
                        'class'=>'table table-striped table-hover '
                    )
                )); ?>

            </div>
        </div>
    </div>


</div>


