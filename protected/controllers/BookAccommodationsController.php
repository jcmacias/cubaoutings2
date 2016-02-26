<?php

class BookAccommodationsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new BookAccommodations;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['BookAccommodations']))
		{
			$model->attributes=$_POST['BookAccommodations'];
			if($model->save()){
                $this->sendEmail($model->email_owner,$model->question);
                $this->redirect(array('view','id'=>$model->id));
            }

		}else{
            //$model->getErrors($model->attributes);
        }

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['BookAccommodations']))
		{
			$model->attributes=$_POST['BookAccommodations'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('BookAccommodations');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new BookAccommodations('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BookAccommodations']))
			$model->attributes=$_GET['BookAccommodations'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BookAccommodations the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BookAccommodations::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BookAccommodations $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='book-accommodations-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function sendEmail($email,$question){


        $subject='=?UTF-8?B?'.base64_encode('Book Accommodation').'?=';
        $headers="From: $email>\r\n".
            "Reply-To: {$email}\r\n".
            "MIME-Version: 1.0\r\n".
            "Content-Type: text/plain; charset=UTF-8";

        mail(Yii::app()->params['adminEmail'],$subject,$question,$headers);
        $this->refresh();
//        $mail = new JPhpMailer;
//        $mail->IsSMTP();
//        $mail->Host = Yii::app()->params['host'];
//        $mail->SMTPSecure = "ssl";
//        $mail->Port = '465';
//        $mail->SMTPAuth = true;
//        $mail->Username = Yii::app()->params['adminEmail'];
//        $mail->Password = Yii::app()->params['password'];
//        $mail->SetFrom($email, Yii::app()->name);
//        $mail->Subject = "Booking";
//        $mail->AltBody = $email." ".$question;
//        $mail->MsgHTML($question);
//        $mail->AddAddress(Yii::app()->params['adminEmail'], Yii::app()->name);
//        $mail->Send();
        /**
        Descomentar para ver si envia el email..
         */
//        if($mail->Send()){
//            echo "Email sent";
//        }else{
//            echo "configure email";die;
//        }
    }
}
