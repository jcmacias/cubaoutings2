<?php

/**
 * This is the model class for table "tours".
 *
 * The followings are the available columns in table 'tours':
 * @property integer $id
 * @property string $name
 * @property string $preview
 * @property string $preview_fr
 * @property string $preview_es
 * @property string $preview_it
 * @property string $preview_ru
 * @property string $description
 * @property string $description_fr
 * @property string $description_es
 * @property string $description_it
 * @property string $description_ru
 * @property string $time_create
 * @property string $time_update
 */
class Tours extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tours';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, preview, description', 'required'),
			array('name', 'length', 'max'=>100),
			array('preview, preview_fr, preview_es, preview_it, preview_ru', 'length', 'max'=>150),
			array('description_fr, description_es,description_it, description_ru, time_create, time_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, preview, preview_fr, preview_es, preview_it, preview_ru, description, description_fr, description_es,description_it, description_ru, time_create, time_update', 'safe', 'on'=>'search'),
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
            'comments' => array(self::HAS_MANY, 'Comment', 'tours_id'),
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
			'preview' => 'Preview',
			'preview_fr' => 'Preview Fr',
			'preview_es' => 'Preview Es',
            'preview_it' => 'Preview It',
            'preview_ru' => 'Preview Ru',
            'description' => 'Description',
			'description_fr' => 'Description Fr',
			'description_es' => 'Description Es',
            'description_It' => 'Description It',
            'description_ru' => 'Description Ru',
			'time_create' => 'Time Create',
			'time_update' => 'Time Update',
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
		$criteria->compare('preview',$this->preview,true);
		$criteria->compare('preview_fr',$this->preview_fr,true);
		$criteria->compare('preview_es',$this->preview_es,true);
        $criteria->compare('preview_it',$this->preview_it,true);
        $criteria->compare('preview_ru',$this->preview_ru,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('description_fr',$this->description_fr,true);
		$criteria->compare('description_es',$this->description_es,true);
        $criteria->compare('description_it',$this->description_it,true);
        $criteria->compare('description_ru',$this->description_ru,true);
		$criteria->compare('time_create',$this->time_create,true);
		$criteria->compare('time_update',$this->time_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tours the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function GetAllTours(){
        $criteria=new CDbCriteria();
        $criteria->select="*";
        $result=$this->findAll($criteria);
        return $result;
    }
}
