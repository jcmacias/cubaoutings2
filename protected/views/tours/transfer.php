<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 24/06/14
 * Time: 15:03
 */
$this->breadcrumbs=array(
    'Transfers',
);
if(!Yii::app()->user->isGuest){
    $this->menu=array(
        array('label'=>'Create Tours', 'url'=>array('create')),
        array('label'=>'Manage Tours', 'url'=>array('admin')),
    );
}else{
    $this->menu=array(
        array('label'=>'Havana day tour','url'=>array('view','id'=>8)),
        array('label'=>'Trinidad & Cienfuegos ','url'=>array('view','id'=>11)),
        array('label'=>'Matanzas, Cárdenas, & Varadero','url'=>array('view','id'=>7)),
        array('label'=>'Havana and Tropicana ','url'=>array('view','id'=>14)),
        array('label'=>'Three cities tour','url'=>array('view','id'=>13)),
        array('label'=>'Guama and the Bay of Pigs ','url'=>array('view','id'=>12)),
        array('label'=>'Havana and the cannon shot','url'=>array('view','id'=>15)),
        array('label'=>'Transfers','url'=>array('transfer')),

    );
}
?>
<!--SECTION TOURS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Tranfers</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Cubaoutings offers transfers to any destination.
    </h6>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
                <p>Cubaoutings offers transfers to any destination. Just let us know the amount of people, luggage, place to pick you up, and time. We will be there punctually. We will drive you to any private house, city, airport or hotel. Just give us the address! We guarantee good cars and drivers, so that you will feel safe and relaxed.</p>
            </div>
        </div>
    </div>


</div>