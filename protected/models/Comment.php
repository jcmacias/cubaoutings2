<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property integer $id
 * @property string $name_owner
 * @property string $email_owner
 * @property string $photo_owner
 * @property string $text
 * @property integer $likes
 * @property integer $dislike
 * @property string $time_create
 * @property string $time_update
 * @property integer $tours_id
 */
class Comment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_owner, email_owner, text, tours_id', 'required'),
			array('likes, dislike, tours_id', 'numerical', 'integerOnly'=>true),
			array('name_owner, email_owner, photo_owner', 'length', 'max'=>100),
            array('photo_owner','file', 'allowEmpty'=>true, 'types'=>'jpg,jpeg,gif,png'),
			array('text', 'length', 'max'=>1000),
			array('time_create, time_update', 'safe'),
            array('email_owner','email'),
            // The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name_owner, email_owner, photo_owner, text, likes, dislike, time_create, time_update, tours_id', 'safe', 'on'=>'search'),
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
            'toursc'=>array(self::BELONGS_TO,'Tours','tours_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name_owner' => 'Name Owner',
			'email_owner' => 'Email Owner',
			'photo_owner' => 'Photo Owner',
			'text' => 'Text',
			'likes' => 'Likes',
			'dislike' => 'Dislike',
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
		$criteria->compare('name_owner',$this->name_owner,true);
		$criteria->compare('email_owner',$this->email_owner,true);
		$criteria->compare('photo_owner',$this->photo_owner,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('likes',$this->likes);
		$criteria->compare('dislike',$this->dislike);
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
	 * @return Comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function getComments($id){
        $criteria=new CDbCriteria();
        $criteria->compare('tours_id',$id,true);
        $criteria->order='t.time_update DESC';

        return new CActiveDataProvider($this,array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>3,
                
            ),
        ));

    }
}
