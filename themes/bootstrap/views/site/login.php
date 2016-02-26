<div class="container" style="padding-top: 20px;">
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

/*$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);*/
?>

<!--<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>-->
    <!--SECTION LOGIN -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Login</h2>

<!--        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Solo para Administradores.
        </h6>
    </div>
<div class="row" style="padding-left: 473px">
    <div class="col-lg-4">
        <div class="form">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>

<!--            <p class="note">Fields with <span class="required">*</span> are required.</p>-->

            <div class="row">
                <?php echo $form->labelEx($model,'username'); ?>
                <?php echo $form->textField($model,'username',array('class'=>'login-name form-control')); ?>
                <?php echo $form->error($model,'username',array('class'=>'label label-danger')); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'password'); ?>
                <?php echo $form->passwordField($model,'password',array('class'=>'login-pass form-control')); ?>
                <?php echo $form->error($model,'password',array('class'=>'label label-danger')); ?>
<!--                <p class="hint">-->
<!--                    Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.-->
<!--                </p>-->
            </div>

            <div class="row rememberMe">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-success btn-lg pull-right')); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->
    </div>
</div>

</div>
