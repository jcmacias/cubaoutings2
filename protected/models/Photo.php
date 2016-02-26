<?php

/**
 * This is the model class for table "photo".
 *
 * The followings are the available columns in table 'photo':
 * @property integer $id
 * @property string $name
 * @property string $direction
 * @property string $principal
 * @property string $description
 * @property string $description_fr
 * @property string $description_es
 * @property string $description_it
 * @property string $description_ru
 * @property string $time_create
 * @property string $time_update
 * @property integer $tours_id
 * @property integer $place_id
 */
class Photo extends CActiveRecord
{

    /***
    Constant for type of picture
     ***/
    const TYPE_0='no';
    const TYPE_1='yes';

    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'photo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, direction, description, tours_id, place_id', 'required'),
			array('tours_id, place_id', 'numerical', 'integerOnly'=>true),
			array('name, direction', 'length', 'max'=>100),
            array('direction','file', 'allowEmpty'=>true, 'types'=>'jpg,jpeg,gif,png','on'=>'update'),
			array('principal', 'length', 'max'=>11),
			array('description_fr, description_es,description_it, description_ru, time_create, time_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, direction, principal, description, description_fr, description_es, description_it, description_ru, time_create, time_update, tours_id, place_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'tours'=>array(self::BELONGS_TO,'Tours','tours_id'),
            'places'=>array(self::BELONGS_TO,'Places','place_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'direction' => 'Direction',
			'principal' => 'Principal',
			'description' => 'Description',
			'description_fr' => 'Description Fr',
			'description_es' => 'Description Es',
            'description_it' => 'Description It',
            'description_ru' => 'Description Ru',
			'time_create' => 'Time Create',
			'time_update' => 'Time Update',
			'tours_id' => 'Tours',
			'place_id' => 'Place',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('direction',$this->direction,true);
		$criteria->compare('principal',$this->principal,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('description_fr',$this->description_fr,true);
		$criteria->compare('description_es',$this->description_es,true);
        $criteria->compare('description_it',$this->description_it,true);
        $criteria->compare('description_ru',$this->description_ru,true);
		$criteria->compare('time_create',$this->time_create,true);
		$criteria->compare('time_update',$this->time_update,true);
		$criteria->compare('tours_id',$this->tours_id);
		$criteria->compare('place_id',$this->place_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Photo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    /**
     * This Method will return pictures of one tour
     **/
    public function getPhotosTours($id){
        $criteria=new CDbCriteria();
        $criteria->compare('tours_id',$id);
        $result=Photo::model()->findAll($criteria);
        return $result;
    }
    public function getPhotosToursPrincipal($id){
        $criteria=new CDbCriteria();
        $criteria->compare('tours_id',$id);
        $criteria->compare('principal',"yes",true);
        $result=Photo::model()->findAll($criteria);
        $dataprovider= new CActiveDataProvider($this,array('criteria'=>$criteria));

        return $result;
    }
    public function getPhotosPlace($id){
        $criteria=new CDbCriteria();
        $criteria->compare('place_id',$id);
        $result=Photo::model()->findAll($criteria);
        return $result;
    }
    public function getTypePicture()
    {
        return array(
            self::TYPE_0=>'no',
            self::TYPE_1=>'yes',
        );
    }
    public static function getPhotosToursData($id){
        $criteria = new CDbCriteria;
        $criteria->compare('tours_id',$id);

        $dataprovider = new CActiveDataProvider('Photo', array(
            'criteria'=>$criteria,
            'pagination' => array(
                'pageSize'=> Yii::app()->params['paginado_places']
            ),
        ));
        return $dataprovider;
    }
}
