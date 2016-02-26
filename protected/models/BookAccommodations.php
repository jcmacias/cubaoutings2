<?php

/**
 * This is the model class for table "book_accommodations".
 *
 * The followings are the available columns in table 'book_accommodations':
 * @property integer $id
 * @property string $email_owner
 * @property integer $pax
 * @property string $date
 * @property string $time_create
 * @property string $question
 */
class BookAccommodations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'book_accommodations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email_owner, pax, question', 'required'),
			array('pax', 'numerical', 'integerOnly'=>true),
			array('email_owner', 'length', 'max'=>100),
			array('question', 'length', 'max'=>255),
			array('date, time_create', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email_owner, pax, date, time_create, question', 'safe', 'on'=>'search'),
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
			'date' => 'Date',
			'time_create' => 'Time Create',
			'question' => 'Question',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time_create',$this->time_create,true);
		$criteria->compare('question',$this->question,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BookAccommodations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
