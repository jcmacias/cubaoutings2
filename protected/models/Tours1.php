<?php

/**
 * This is the model class for table "tours".
 *
 * The followings are the available columns in table 'tours':
 * @property integer $id
 * @property string $name
 * @property string $description
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
			array('name, description,preview', 'required'),
			array('name', 'length', 'max'=>100),
            array('preview', 'length', 'max'=>150),
            array('preview', 'length', 'min'=>100),
			//array('description', 'length', 'max'=>250),
			array('time_create, time_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name,preview, description, time_create, time_update', 'safe', 'on'=>'search'),
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
			'name' => 'Tour name',
            'preview'=>'Preview',
			'description' => 'Description',
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
		$criteria->compare('description',$this->description,true);
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
