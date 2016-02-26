<?php

/**
 * This is the model class for table "book".
 *
 * The followings are the available columns in table 'book':
 * @property integer $id
 * @property string $email_owner
 * @property integer $pax
 * @property string $date_book
 * @property string $question
 * @property string $time_create
 * @property string $time_update
 * @property integer $tours_id
 */
class Book extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'book';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email_owner, pax, date_book, tours_id', 'required'),
			array('pax, tours_id', 'numerical', 'integerOnly'=>true),
			array('email_owner, question', 'length', 'max'=>100),
			array('time_create, time_update', 'safe'),
            array('email_owner','email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email_owner, pax, date_book, question, time_create, time_update, tours_id', 'safe', 'on'=>'search'),
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
            'toursb'=>array(self::BELONGS_TO,'Tours','tours_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email_owner' => 'Email Owner',
			'pax' => 'Pax',
			'date_book' => 'Date Book',
			'question' => 'Question',
			'time_create' => 'Time Create',
			'time_update' => 'Time Update',
			'tours_id' => 'Tours',
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
		$criteria->compare('email_owner',$this->email_owner,true);
		$criteria->compare('pax',$this->pax);
		$criteria->compare('date_book',$this->date_book,true);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('time_create',$this->time_create,true);
		$criteria->compare('time_update',$this->time_update,true);
		$criteria->compare('tours_id',$this->tours_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Book the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
