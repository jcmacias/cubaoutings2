<?php

/**
 * This is the model class for table "offer".
 *
 * The followings are the available columns in table 'offer':
 * @property integer $id
 * @property string $message
 * @property string $message_fr
 * @property string $message_es
 * @property string $message_it
 * @property string $message_ru
 * @property string $imagen
 * @property string $create_time
 */
class Offer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'offer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('message', 'required'),
			array('message, message_fr, message_es, message_it, message_ru, imagen', 'length', 'max'=>100),
            array('imagen','file', 'allowEmpty'=>true, 'types'=>'jpg,jpeg,gif,png'),
			array('create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, message, message_fr, message_es, message_it, message_ru, imagen, create_time', 'safe', 'on'=>'search'),
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
			'message' => 'Message',
			'message_fr' => 'Message Fr',
			'message_es' => 'Message Es',
            'message_it' => 'Message It',
            'message_ru' => 'Message Ru',
			'imagen' => 'Imagen',
			'create_time' => 'Create Time',
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
		$criteria->compare('message',$this->message,true);
		$criteria->compare('message_fr',$this->message_fr,true);
		$criteria->compare('message_es',$this->message_es,true);
        $criteria->compare('message_it',$this->message_it,true);
        $criteria->compare('message_ru',$this->message_ru,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Offer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function GetOffer(){
        $criteria= new CDbCriteria();
        $criteria->select='*';
        $criteria->order='create_time DESC';
        $result=$this->findAll($criteria);
        return $result;
    }
}
